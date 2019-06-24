@extends('layouts.blog')

@section('title')
    - {{ $post->title }}
@endsection

@section('meta')
    @foreach($post->meta as $name => $meta)
        @if(substr($name, 0, 9) === 'opengraph')
            <meta property="{{ str_replace('opengraph_', 'og:', $name) }}" content="{{ $meta }}">
        @else
            @if($name === 'meta_description')
                <meta name="description" content="{{ $meta }}">
            @else
                <meta name="{{ $name }}" content="{{ $meta }}">
            @endif
        @endif
    @endforeach
@endsection

@section('content')


    <div class="container mx-auto px-5 lg:max-w-4xl mt-48">
        <div class="leading-loose text-base flex flex-col justify-center items-center post-body">

            <h1 class="text-3xl sm:text-5xl">{{ $post->title }}</h1>
            <p class="text-light uppercase mb-10 block">
                Posted on {{ $post->publish_date->format('F jS, Y')}}
            </p>

            <div class="mb-8">
                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}">
                <div class="mt-3 text-center text-blue-900 text-sm mb-0">{!! $post->featured_image_caption !!}</div>
            </div>

            {!! $post->body !!}
        </div>
    </div>

    <div class="container mx-auto px-5 lg:max-w-4xl">
        <div class="my-10 py-10 flex items-center border-dashed border-t border-b border-blue-300">
            <div class="w-20">
                <img src="{{ $post->author->avatar }}" class="rounded-full">
            </div>
            <div class="pl-5 leading-loose flex-1">
                By <span class="font-bold">{{ $post->author->name }}</span>
                <div class="text-sm">
                    {!! $post->author->bio !!}
                </div>
            </div>
        </div>
    </div>

@endsection