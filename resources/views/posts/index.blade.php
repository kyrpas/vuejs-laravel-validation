@extends('layouts.main')

@section('content')
    <h1 class="border-b">Posts</h1>

    @foreach($posts as $post)
        <div class="mt-10">
            <h3 class="mb-4"><a class="text-green-dark no-underline" href="#">{{ $post->title }}</a></h4>
            <p class="leading-normal">{{ str_limit($post->body, 300) }}</p>
        </div>
    @endforeach
@stop
