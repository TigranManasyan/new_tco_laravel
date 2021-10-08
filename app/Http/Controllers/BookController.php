<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function  index() {
        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.name', 'categories.category_name')
            ->get();

        return $books;
    }
}
