<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
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
        $category = Categories::get();

        view()->share([
            'kategori' => $category
        ]);

        return view('book.v_create');
    }

    function detail($book_id)
    {
        // $book = Book::where('book_id', $book_id)
        $book = Book::all();
            // dd($book);
            // $book = Book::where('book_id', $book_id);

            // view()->share([
            //     'buku' => $book
            // ]);

            // ->join('categories', 'book.id_category', '=', 'categories.id_category')
            // ->first();
            // dd($book);  
        dd($book);

        return view('book.detail', compact('book'));
    }

    function store(Request $request)
    {

        $request->validate([
            'img' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $book = new Book();
        // $category = new Categories();
        $book->judul = $request->judul;
        $book->author = $request->author;
        $book->desk = $request->desk;
        $book->id_category = $request->ctg;


        $imageName = time() . '.' . $request->img->extension();
        $book->image = $imageName;

        $request->img->move(public_path('images'), $imageName);

        $book->save();

        return redirect('book/index');
    }

    public function edit($book_id)
    {

        $book = Book::where('book_id', $book_id)->first();

        view()->share([
            'buku' => $book
        ]);

        return view('book.v_edit', compact('book'));
    }

    function update(Request $request, $book_id)
    {
        $book = Book::where('book_id', $book_id)->first();
        $book->judul = $request->judul;
        $book->author = $request->author;
        $book->desk = $request->desk;

        $book->save();

        return redirect('book/detail');
    }

    function destroy($book_id)
    {
        $book = Book::where('book_id', $book_id);

        $book->delete();

        return redirect('book/index');
    }

}