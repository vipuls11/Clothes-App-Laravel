<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/sidesubmenu', function () {
    return view('sidesubmenu');
});

Route::get('/productcard', function () {
    return view('productcard');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/single-product', function () {
    return view('single-product');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');