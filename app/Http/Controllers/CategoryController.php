<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $category = Categories::get();
        
        view()->share([
            'kategori' => $category
        ]);

        return view('v_category');
    }

    public function create() {
        return view('v_create');
    }

    public function store(Request $request) {
        $data = new Categories;
        $data->name = $request->nama;

        $data->save();

        return redirect('category/index');
    }

    public function edit($id_category) {

        $data = Categories::where('id_category', $id_category)->first();
        
        view()->share([
            'data' => $data
        ]);
        
        return view('v_editCtg');
    }
}