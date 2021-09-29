<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
   public function index()
   {
       echo 1;
//       return view('posts.all_posts', ['x' => 1]);
   }

    public function welcome()
    {
       return $this->index() . 'Hello i am PastController';
    }

    public function forForm(PostRequest $request)
    {
        if($request->email === 'john@mail.ru' && $request->password === '12345678') {
            return view('pages.dashboard');
        }

//        return $request;
//        return $request['email'];
//        return $request->email;
//        return ($request->email === 'john@mail.ru') ? 'Welcome' : 'Incorrect email';
//        $validated = $request->validate([
//            'email' => 'required|email|min:12',
//            'password' => 'required|min:6|max:10'
//        ]);
//        if($validated) {
//            return 'Welcome';
//        } else {
//            return 'Fail';
//        }
    }
}
