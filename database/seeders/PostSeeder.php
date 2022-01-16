<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Post = new Post;

        $Post->fill([
            'title' => "test!",
            'content' => "This is a test posts plz dont judge",
            'author' => "Giorgi Chutlashvili",
            'created_at'=> date('Y-m-d H:i:s'),
        ])->save();
    }
}
