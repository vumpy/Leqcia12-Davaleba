<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }

    public function show(Request $request, $id){

        $posts = Post::where('id', $id)->get();

        $comments = Comment::where('post_id', $id)->get();

        if($request->has('content')){
            $Comment = new Comment();

            $Comment->fill([
                'author' => $request -> input('author'),
                'content' => $request -> input('content'),
                'post_id' => $id,
            ]);
                $Comment->save();
                return redirect()->back();
        }

        return view('post', ['posts' => $posts, 'comments'=>$comments]);
    }

    public function delete($id){

        $Post = Post::where('id', $id);
        $Post->delete();

        return redirect('/');
    }
}
