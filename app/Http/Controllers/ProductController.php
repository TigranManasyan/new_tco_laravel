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

    public function one_product($id) {
        return view('products.one_product', ['product' => Product::find($id)]);
    }

    public function delete($id) {
        $product = new Product();
        $product->find($id)->delete();
        return redirect()
            ->route('all-products')
            ->with('success', 'Row successfully deleted!');
    }

    public function edit($id) {
        return view('products.update_product', ['product' => Product::find($id)]);
    }

    public function update(Request $request, $id) {
        $product = new Product();
        $product->find($id)->update([
            'product_name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        return $this->one_product($id);
    }

}
