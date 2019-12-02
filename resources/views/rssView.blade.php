@extends('layouts\master')

@section('content')
    <h1>RSS Feed</h1>

    <h2>Category</h2>

    @foreach ($categories as $category)
        <a href="{{ route('rss-api', ['category' => $category->slug]) }}"><h4>{{ $category->name }}</h4></a>
    @endforeach
@endsection