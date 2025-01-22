<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Route::get('cars', [CarController::class, 'car'])->name('car');
Route::get('input', [CarController::class, 'input'])->name('input');
Route::post('insert',[CarController::class, 'insert'])->name('insert');
Route::get('/', function () {
    return view('welcome');
}); 