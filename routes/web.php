<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
////    return '<h1>Hello</h1>';
//});
//
//
//Route::get('/about', function () {
//    $users = [
//        ["id" => 1, "name" => "John Smith"],
//        ["id" => 2, "name" => "John Doe"],
//        ["id" => 3, "name" => "Mike Smith"],
//        ["id" => 4, "name" => "Jane Smith"],
//        ["id" => 5, "name" => "John Smith"]
//    ];
//    return view('about', ['users' => $users]);
////    return view('about', compact('users'));
////    return '<h1>About us</h1>';
//})->name("a");
//
//
//Route::get('/home', function() {
//    return view('pages.home');
//})->name('home-page');
//
//Route::get('/blog', function() {
//    return view('pages.blog');
//})->name('blog-page');



/*Route::get('/', function() {
    return 'Hello';
});*/

//Route::get('/', [PostController::class, 'index'])->name('all-posts');
//Route::get('/a', [PostController::class, 'welcome'])->name('a');



//Route::get('/form', function() {
//    return view('form');
//});
//
//Route::post(
//    '/form/send',
//    [PostController::class, 'forForm']
//)->name('send-data');

Route::get(
    '/products',
    [ProductController::class, 'index']
)->name('all-products');





Route::get('/products/new', function() {
    return view('products.new_product');
})->name('create-product');

Route::post(
    '/products/new/send',
    [ProductController::class, 'create']
)->name('store-product');

Route::get(
    '/products/{id}',
    [ProductController::class, 'one_product'])
    ->name('one');

Route::get(
    '/products/delete/{id}',
    [ProductController::class, 'delete'])
    ->name('delete-product');


Route::get(
    '/products/edit/{id}',
    [ProductController::class, 'edit'])
    ->name('edit-product');


Route::post(
    '/products/edit/{id}',
    [ProductController::class, 'update'])
    ->name('update-product');
