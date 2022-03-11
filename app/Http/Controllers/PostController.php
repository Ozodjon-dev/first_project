<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        // return "Hello world!!! :-)";
        $posts = Post::where('likes', '<=', 50)->get();
        foreach($posts as $post){
            dump($post->title);
        }
        dd('end');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'some title blabla',
                'content' => 'some cntent kdkkdkkdkdkkd',
                'image' => 'blabla.jpg',
                'likes' => 25,
                'is_published' => 0
            ],
            [
                'title' => 'TITTLE',
                'content' => 'EEEEEEEEEEEEEE',
                'image' => 'EEEEEEEEEEE.jpg',
                'likes' => 88,
                'is_published' => 1
            ]
        ];
        
        Post::create([
            'title' => 'TITTLE',
            'content' => 'EEEEEEEEEEEEEE',
            'image' => 'EEEEEEEEEEE.jpg',
            'likes' => 88,
            'is_published' => 1  
        ]);
        dd('end');
    }
    
}