<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Post\FilterRequest;
use App\Http\Requests\Post\FilterRequest as PostFilterRequest;

class IndexController extends BaseController
{
    public function __invoke(PostFilterRequest $request)
    {
        $data = $request->validated();

        $query = Post::query();
        if (isset($data['category_id'])){
            $query->where('category_id', $data['category_id']);
        }
        if (isset($data['title'])){
            $query->where('title', 'like', "%{$data['title']}%");
        }
        $posts = $query->get();
        dd($posts);
        // $posts = post::paginate(8);
        // return view('post.index', compact('posts'));



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
