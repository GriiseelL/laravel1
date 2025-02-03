<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index() {

        $book = Book::get();
        
        view()->share([
            'buku' => $book
        ]);
        return view('book.v_book');
    } 
    
}