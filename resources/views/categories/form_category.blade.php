@extends('layouts.app')
@section('title'){{(isset($category)) ? 'Update ' . $category->category_name : 'New category'}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
        <h3>{{(isset($category)) ? 'Update ' . $category->category_name : 'New category'}}</h3>
        <form
            action="{{route((isset($category)) ? 'categories.update' . ',' . $category->id : 'categories.store')}}"
            method="post">
            @csrf
            <div class="mb-3">
                <label for="category_name" class="form-label">Category name</label>
                <input
                    type="text"
                    name="category_name"
                    class="form-control"
                    id="category_name"
                    placeholder="Computers">
            </div>
            @if(isset($category))
                <button class="btn btn-success">Update</button>
            @else
                <button class="btn btn-primary">Save</button>
            @endif
            <a href="{{route('categories.index')}}">Back to all categories</a>
        </form>
        </div>
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
    </div>
@endsection
