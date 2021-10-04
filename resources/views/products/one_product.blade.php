@extends('layouts.app')
@section('title') {{$product->product_name}}
@endsection
@section('content')
    <h2>{{ $product->product_name }}</h2>
    <p>Price {{$product->price}}</p>
    <p>Quantity {{$product->quantity}}</p>
    <p>Published {{$product->created_at}}</p>
    <p>Updated {{$product->updated_at}}</p>
    <button class="btn btn-danger">
        <a style="color:white;text-decoration: none" href="{{ route('delete-product', $product->id) }}">Delete</a>
    </button>
    <button class="btn btn-success">
        <a
            style="color:white;text-decoration: none"
            href="{{ route('edit-product', $product->id) }}">Edit
        </a>

    </button>
    <br>
    <a href="{{route('all-products')}}">Back to all products</a>
@endsection
