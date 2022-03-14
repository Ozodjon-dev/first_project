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
        dump('end');
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
        foreach($postsArr as $item){
            // dump($item);
            Post::create($item);
        }
        dd('created');
    }
    
    public function users(){
        $users = Post::where('is_published', "1")->get();
        // $user = $users->where('is_published');
        foreach ($users as $user){
            dump($user->content);
        }
        dump('end');
    }

    public function update(){
        $updatedVars = post::all();
        foreach ($updatedVars as $updatedVar){
            $updatedVar->update([
                'content' => '----------------------'
            ]);
        }   
        dd('updated all');
    }
    public function delete(){
        $post = post::withTrashed()->where('id', 3);
        $post->restore();
        dd("deleted");
    }
}