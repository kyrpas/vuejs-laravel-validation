@extends('layouts.main')

@section('content')
    <h1 class="border-b">Posts</h1>

    <form class="mt-20" action="{{ route('posts.store') }}" method="POST">
        {{ csrf_field() }}
        
        <label class="block font-bold mb-2">Title</label>
        <input type="text" name="title" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Author</label>
        <input type="text" name="author" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Date</label>
        <input type="text" name="date" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Body</label>
        <textarea name="body" rows="10" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded"></textarea>
        
        <button type="submit" class="rounded px-4 py-3 bg-green text-white no-underline" href="{{ route('posts.create') }}">Create Post</button>
    </form> 
@stop
