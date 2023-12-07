<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Hello World', 
        'par' => 'Laravel Test',
        'sub' => 'Lorem Ipsum'
    ];
    return view('home', $data);
});

Route::get('/chi-siamo', function () {
    $data = [
        'title' => 'Chi Siamo', 
    ];
    return view('chi-siamo', $data);
});

Route::get('/menu', function () {
    $data = [
        'title' => 'Menu', 
    ];
    return view('menu', $data);
});
