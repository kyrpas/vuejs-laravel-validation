<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Posts</title>
    </head>
    <body class="pt-24">
        <div id="app" class="container mx-auto">
            <p class="float-right">
                <a class="rounded px-4 py-3 bg-green text-white no-underline" href="{{ route('posts.create') }}">Create Post</a>
            </p>
            @yield('content')
        </div>
        <script src="{!! mix('js/app.js') !!}"></script>
    </body>
</html>
