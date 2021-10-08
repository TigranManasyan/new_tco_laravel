@extends('layouts.app')
@section('title')Image upload
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('upload-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image"> <br>
            <button class="btn btn-success">Upload</button>
        </form>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection
