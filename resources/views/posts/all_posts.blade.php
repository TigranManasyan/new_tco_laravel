@extends('layouts.app')
@section('title')All posts
@endsection
@section('content')
    @section('nav-bar')
    @endsection
    <div class="container">
        <h1>All Posts</h1>
        {{ (isset($x)) ? $x : '' }}
    </div>
@endsection
