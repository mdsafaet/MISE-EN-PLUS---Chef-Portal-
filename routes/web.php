<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mykitchen', function () {
    return view('mykitchen');
});

Route::get('/pantrylist', function () {
    return view('pantrylist');
});




