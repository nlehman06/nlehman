<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Wink\WinkTag;

class BlogController extends Controller {

    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC');

        if(request()->path() !== 'blog') {
            $posts = $posts->whereHas('tags', function ($query) {
                $slug = explode('/', request()->path())[1];
                $query->whereSlug($slug);
            });
        }

        $posts = $posts->simplePaginate(10);

        $tags = WinkTag::withCount('posts')->orderBy('posts_count', 'DESC')->get();

        return view('blog.index', compact('posts', 'tags'));
    }

    public function show($slug)
    {
        $post = WinkPost::live()
            ->with('author:id,avatar,name,bio')
            ->whereSlug($slug)
            ->firstOrFail();

        $tags = WinkTag::withCount('posts')->orderBy('posts_count', 'DESC')->get();

        return view('blog.show', compact('post', 'tags'));
    }
}
