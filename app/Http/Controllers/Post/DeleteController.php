<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Post\Redirect;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        //
        //$post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');

        // $post->delete();
        // if($post->delete()) { 
        //     return redirect()->route('posts.index')->with('message', 'Post deleted.');
        // }
    }
}