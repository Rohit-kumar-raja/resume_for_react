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
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('templates', function () {
    return view('templates');
})->name('templates');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('preview.template', function () {
    return view('preview');
})->name('preview');

Route::get('start', function () {
    return view('start');
})->name('start');
