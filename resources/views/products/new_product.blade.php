@extends('layouts.app')
@section('title')New Product
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('store-product') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        id="product_name"
                        placeholder="Apple">
                    <span class="help-block text-danger"> {{ $errors->first('name') }}</span>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product price</label>
                    <input
                        type="text"
                        name="price"
                        class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                        id="price"
                        placeholder="100">
                    <span class="help-block text-danger"> {{ $errors->first('price') }}</span>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Product quantity</label>
                    <input
                        type="number"
                        min="1"
                        name="quantity"
                        class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}"
                        id="quantity"
                        placeholder="100">
                    <span class="help-block text-danger"> {{ $errors->first('quantity') }}</span>

                </div>
                <button class="btn btn-primary"> Save </button>
            </form>
        </div>
        <div class="col-md-8 pt-2">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
@endsection
