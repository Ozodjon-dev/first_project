<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = post::all();
        return view('post.index', compact('posts'));

        // $category = Category::find(1);
        // $tag = Tag::find(3);
        // dd($post->tags);
        // dd($categories->title);

        // $category = Category::find(3);
        // $post = Post::find(3);
        // $tag = Tag::find(1);
        // dd($tag->posts);
    }
}
