@extends('layouts.blog')

@section('meta')
    @foreach($post->meta as $name => $meta)
        <meta name="{{ $name }}" content="{{ $meta }}">
    @endforeach
@endsection

@section('content')


    <div class="container mx-auto px-5 lg:max-w-4xl">
        <h1 class="mb-10 text-5xl font-sans">{{ $post->title }}</h1>
        <p class="text-light uppercase font-sans mb-10 block">
            Posted on {{ $post->publish_date->format('F jS, Y')}}
        </p>
    </div>

    <div class="container mx-auto px-5 lg:max-w-4xl">
        <div class="leading-loose text-base flex flex-col justify-center items-center post-body">
            <div class="mb-8">
                <img src="{{ $post->featured_image }}" alt="{{ $post->title }}">
                <div class="mt-3 text-center text-blue-300 text-sm mb-0">{!! $post->featured_image_caption !!}</div>
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