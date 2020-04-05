@extends('main')

@section('title', '| پست‌ها')

@section('content')

    @foreach($posts as $post)
        <div class="text-right" dir="rtl">
            <h1 class="mt-4">{{ $post->title }}</h1>
            <p class="mt-4">{{ $post->body }}</p>
            <hr>
        </div>
    @endforeach
@endsection