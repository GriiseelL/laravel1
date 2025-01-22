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
        // $tmp = "$request->merk $request->img $request->ctg";
        // dd($tmp);

        $data = new Car();  
        $data->merk = $request->merk;
        $data->image = $request->img;
        $data->category = $request->ctg;
        
        $data->save();

        return redirect()->route('car');
    }

    public function edit ($id_car) {

        $data = Car::where('id_car', $id_car)->first();
        
        view()->share([
            'data' => $data 
        ]);
        
        return view('v_edit');
    }

    public function update() {
        
    }
}