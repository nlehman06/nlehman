@extends('layouts.blog')

@section('meta')
    <meta name="description" content="A blog where I talk about code, life and things I'm working on in general.">
    <meta property="og:url" content="https://nlehman.dev/blog">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="Nathan Lehman's Blog">
    <meta name="twitter:title" content="Nathan Lehman's Blog">
    <meta property="og:description" content="A blog where I talk about code, life and things I'm working on in general.">
    <meta name="twitter:description" content="A blog where I talk about code, life and things I'm working on in general.">
    <meta property="og:image" content="{{ asset('img/LogoLarge.png') }}">
    <meta name="twitter:image" content="{{ asset('img/LogoLarge.png') }}">
@endsection

@section('content')

    <div class="container mx-auto px-5 lg:max-w-4xl">

        @foreach($posts as $post)
            @if ($loop->first)
                <div class="w-full pb-10 mb-10 border-b border-blue-300">
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                       class="block h-64 bg-cover bg-center bg-no-repeat"
                       style="background-image: url({{$post->featured_image}});"></a>
                    <div class="pt-5 px-5 sm:px-0">
                        <div>
                            <span class="text-light uppercase text-xs">Posted
                                On {{ $post->publish_date->format('F jS, Y') }}</span>
                            <h3 class="leading-normal block my-4">
                                <a class="no-underline hover:underline"
                                   href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="leading-loose">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex mb-10">
                    <div class="w-3/4 pr-5">
                        <h3 class="mb-2">
                            <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                               class="no-underline hover:underline">{{ $post->title }}</a>
                        </h3>
                        <p class="leading-normal text-sm text-light">{{ $post->excerpt }}</p>
                        <p class="text-sm mt-2">Posted on {{ $post->publish_date->format('F jS, Y') }}</p>
                    </div>
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                       class="block w-1/4 bg-cover bg-center bg-no-repeat"
                       style="background-image: url({{$post->featured_image}});"></a>
                </div>
            @endif
        @endforeach
        {{ $posts->links() }}
    </div>

@endsection