<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
//       return 'Hello i am PastController';
       return view('posts.all_posts', ['x' => 1]);
   }
}
