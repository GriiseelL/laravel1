<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index()
    {

        $book = Book::get();

        view()->share([
            'buku' => $book
        ]);
        return view('book.v_book');
    }

    function create()
    {
        return view('book.v_create');
    }

    function detail($book_id)
    {
        $book = Book::where('book_id', $book_id)->first();
        // dd($book);
        // $book = Book::where('book_id', $book_id);

        // view()->share([
        //     'buku' => $book
        // ]);
        return view('book.detail');
    }

    function store(Request $request)
    {
        $book = new Book();
        $book->judul = $request->judul;
        $book->author = $request->author;
        $book->desk = $request->desk;

        $book->save();

        return redirect('book/index');
    }

    public function edit($book_id)
    {

        $book = Book::where('book_id', $book_id)->first();

        view()->share([
            'buku' => $book
        ]);

        return view('book.v_edit');
    }

    function update(Request $request, $book_id)
    {
        $book = Book::where('book_id', $book_id);
        $book->judul = $request->judul;

        $book->save();
    }

}