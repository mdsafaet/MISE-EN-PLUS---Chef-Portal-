<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-staff', function () {
    return view('add_staff');
});
Route::get('/admin/home', function () {
    return view('admin_home');
});



Route::get('/mykitchen', function () {
    return view('mykitchen');
});

Route::get('/pantrylist', function () {
    return view('pantrylist');
});







=======
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


