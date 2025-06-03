<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//fardin
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
//fardin


//onti
Route::get('/suppliers/home', function () {
    return view('suppliers_home');
});

//onti