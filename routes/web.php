<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/datapasien', function () {
    return view('datapasien');
})->name('datapasien');

Route::get('/jenispemeriksaan', function () {
    return view('jenispemeriksaan');
})->name('jenispemeriksaan');

Route::get('/tambahpasien', function () {
    return view('tambahpasien');
})->name('tambahpasien');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');