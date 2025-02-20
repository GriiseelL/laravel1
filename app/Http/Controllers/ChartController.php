<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    function chart(){
        
        $data=Book::get();

        view()->share([
            'chart' => $data
        ]);
            
        
        
        // $chart = Book::database('stok');`
        
        return view('chart.chart');
    }
}