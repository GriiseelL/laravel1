<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

Route::get('cars', [CarController::class, 'car'])->name('car');
Route::get('input', [CarController::class, 'input'])->name('input');
Route::post('insert', [CarController::class, 'insert'])->name('insert');
Route::get('edit/{id_car}', [CarController::class, 'edit'])->name('viewEdit');
Route::put('update/{id_car}', [CarController::class, 'update'])->name('actionUpdate');
Route::get('delete/{id_car}', [CarController::class, 'delete'])->name('actionDelete');

Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('index', [CategoryController::class, 'index'])->name('index');
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    Route::post('store', [CategoryController::class, 'store'])->name('store');
    Route::get('edit/{id_category}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('update/{id_category}', [CategoryController::class, 'update'])->name('update');
    Route::get('destroy/{id_category}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'book', 'as' => 'book.'], function () {
    Route::get('index', [BookController::class, 'index'])->name('index');
    Route::get('create', [BookController::class, 'create'])->name('create');
    Route::get('detail/{book_id}', [BookController::class, 'detail'])->name('detail');
    Route::post('store', [BookController::class, 'store'])->name('store');
    Route::get('edit/{book_id}', [BookController::class, 'edit'])->name('edit');
    Route::put('update/{book_id}', [BookController::class, 'update'])->name('update');
    Route::get('destroy/{book_id}', [BookController::class, 'destroy'])->name('destroy');
});

Route::get('chart', [ChartController::class, 'chart'])->name('chart');

Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('action', [LoginController::class, 'actionLogin'])->name('action');
    Route::get('home', [LoginController::class, 'home'])->name('home');
});

Route::group(['prefix' => 'regis', 'as' => 'regis.'], function () {
    Route::get('regis', [LoginController::class, 'regis'])->name('regis');
    Route::post('create', [LoginController::class, 'createRegis'])->name('create');
});

Route::get('/', function () {
    return view('welcome');
});