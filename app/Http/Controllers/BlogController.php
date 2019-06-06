<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class BlogController extends Controller {

    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(2);

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = WinkPost::live()
            ->with('author:id,avatar,name,bio')
            ->whereSlug($slug)
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
