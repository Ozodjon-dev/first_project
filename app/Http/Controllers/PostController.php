<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        // return "Hello world!!! :-)";
        $posts = Post::all();
        foreach($posts as $post){
            dump($post->image,);
        }
        dd('end');
    }

}