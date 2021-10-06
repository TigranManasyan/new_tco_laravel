@extends('layouts.app')
@section('title')All categories
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary">
                <a
                    style="color:white; text-decoration: none"
                    href="{{ route('categories.create') }}">
                    Create category
                </a>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>All categories</h3>
            @if(isset($categories))
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($categories); $i++)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $categories[$i]->category_name }}</td>
                                <td>
                                    <button class="btn btn-info">More</button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
