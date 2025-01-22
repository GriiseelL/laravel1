<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function car()
    {

        $cars = Car::get();

        view()->share([
            'mobil' => $cars
        ]);

        return view("v_car");
    }

    public function input()
    {
        return view('v_input');
    }

    public function insert( Request $request) 
    {
        $tmp = "$request->merk $request->img $request->ctg";
        dd($tmp);

    }
}