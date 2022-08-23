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

    $data = [
        'squadre' => ['juve', 'milan', 'inter', 'napoli'],
        'punti' => [21, 21, 18, 15],
        'pages' => ['page1', 'page2', 'page3']
        
    ];

    return view('home', $data);
})->name('home');

Route::get('/page1', function () {
    return view('page1');
})->name('page1');

Route::get('/page2', function () {
    return view('page2');
})->name('page2');

Route::get('/page3', function () {
    return view('page3');
})->name('page3');
