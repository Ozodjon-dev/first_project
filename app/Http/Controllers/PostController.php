<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $posts = post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        dd('111111111111111111');
    }
    
    // public function users(){
    //     $users = Post::where('is_published', "1")->get();
    //     // $user = $users->where('is_published');
    //     foreach ($users as $user){
    //         dump($user->content);
    //     }
    //     dump('end');
    // }

    // public function update(){
    //     $updatedVars = post::all();
    //     foreach ($updatedVars as $updatedVar){
    //         $updatedVar->update([
    //             'content' => '----------------------'
    //         ]);
    //     }   
    //     dd('updated all');
    // }
    // public function delete(){
    //     $post = post::withTrashed()->where('id', 3);
    //     $post->restore();
    //     dd("deleted");
    // }

    // public function firstOrCreate()
    // {
    //     $anotherPost = 
    //     [
    //         'title' => 'some title blabla',
    //         'content' => 'some cntent kdkkdkkdkdkkd',
    //         'image' => 'blabla.jpg',
    //         'likes' => 25,
    //         'is_published' => 0 
    //     ];

    //     $myPost = post::firstOrCreate([
    //         'title' => '--------------------'
    //     ],[
    //         'title' => '--------------------',
    //         'content' => '++++++++++++++++++',
    //         'image' => '*******************.jpg',
    //         'likes' => 1551515,
    //         'is_published' => 1
    //     ]); 
        
    //     dump($myPost->content);
    //     dd("finished");
    // }
    
    // public function updateOrCreate(){
    //     $anotherPost = 
    //     [
    //         'title' => 'some title blabla',
    //         'content' => 'some cntent kdkkdkkdkdkkd',
    //         'image' => 'blabla.jpg',
    //         'likes' => 25,
    //         'is_published' => 0 
    //     ];

    //     $post = post::updateOrCreate(
    //         [
    //             'title' => '@@@@@@@@@@@@@@@'
    //         ],[
    //             'title' => 'some@@@@@@@@@@@@@@@ title blabla',
    //             'content' => 'some updated content kdkkdkkdkdkkd',
    //             'image' => 'updated blabla.jpg',
    //             'likes' => 25,
    //             'is_published' => 0  
    //         ]);
    //         dump($post->content);
    //         dd(555555555555555);
    // }

}