@extends('layouts.app')
@section('title')Form
@endsection
@section('content')
<div class="container">
{{--    @include('includes.messages')--}}
    <form action="{{ route('send-data') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">

            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="12345678">
            @error('password')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
</div>
@endsection
