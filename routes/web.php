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
    return view('welcome');
});

Route::get('/home.blade.php', function () {
    return view('home');
});

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/chair.blade.php', function () {
    return view('chair');
});

Route::get('/intro.blade.php', function () {
    return view('intro');
});

Route::get('/product.blade.php', function () {
    return view('product');
});

Route::get('/table.blade.php', function () {
    return view('table');
});
