<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();
        return view(
            'products.all_products',
            ['products' => $products]
        );
    }

    public function create(ProductRequest $request) {
        $product = new Product();
        $product->product_name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->created_at = NOW();
        $product->updated_at = NOW();
        $product->save();
        return redirect()
            ->route('create-product')
            ->with('success', 'Row successfully inserted!');
    }
}
