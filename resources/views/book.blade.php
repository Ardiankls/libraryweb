{{-- @dd($post->category); --}}
@extends('layouts.main')
@section('content')
<div class="container">
    <h2>{{ $book->title }}</h2>
    {{-- <h4>Category <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a> </h4> --}}
    <h5> by {{ $book->author }} </h5>
    <p> description {{ $book->about}}</p>
</div>
<a href="/collection">back to post</a>
@endsection