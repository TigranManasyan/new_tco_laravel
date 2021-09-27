<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
//    return '<h1>Hello</h1>';
});


Route::get('/about', function () {
    $users = [
        ["id" => 1, "name" => "John Smith"],
        ["id" => 2, "name" => "John Doe"],
        ["id" => 3, "name" => "Mike Smith"],
        ["id" => 4, "name" => "Jane Smith"],
        ["id" => 5, "name" => "John Smith"]
    ];
//    return view('about', ['users' => $users]);
    return view('about', compact('users'));
//    return '<h1>About us</h1>';
})->name("a");

