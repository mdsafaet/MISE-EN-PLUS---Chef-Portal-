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

<<<<<<< HEAD






=======
//fardin
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
//fardin
>>>>>>> 811cb7d6754d06afe4387a787e104491450b16a5
