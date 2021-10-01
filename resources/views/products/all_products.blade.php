@extends('layouts.app')
@section('title')All product
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-success mt-4">
                <a style="color:white;text-decoration: none" href="{{ route('create-product') }}"> New product </a>
            </button>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Published</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @if(isset($products))
                       @for($i = 0; $i < count($products);$i++)
                           <tr>
                               <td>{{$i + 1}}</td>
                               <td>{{$products[$i]['product_name']}}</td>
                               <td>{{$products[$i]['created_at']}}</td>
                               <td>
                                   <button class="btn btn-info">
                                       More
                                   </button>
                               </td>
                           </tr>
                       @endfor
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
