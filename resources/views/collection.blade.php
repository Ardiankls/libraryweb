@extends('layouts.main')
@section('content')
<h1>{{ $title }}</h1>

<div class="container mt-5">
    @foreach ($books as $book)
        <div class="my-5 border-bottom">
            <a href="/collection/{{ $book->slug }}">
                <h2>{{ $book->title }}</h2>
            </a>
            <p class="font-weight-bold"> author: {{ $book->author}} </p>
            {{-- <p> {{ $post->excerpt }}</p> --}}
        </div>
    @endforeach
</div>@endsection
