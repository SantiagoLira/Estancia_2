<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frutas');
})->name('template');

Route::get('fruits', function () {
    return view('frutas');
});
Route::get('colors', function () {
    return view('colors');
});

Route::get('adjetives', function () {
    return view('adjetivos');
});

Route::get('animals', function () {
    return view('animales');
});
