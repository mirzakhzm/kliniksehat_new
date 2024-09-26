<?php
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/jenispemeriksaan', function () {
    return view('jenispemeriksaan');
})->name('jenispemeriksaan');

Route::get('/tambahpasien', function () { //perhatikan
    return view('tambahpasien');
})->name('tambahpasien');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/datapasien', [PasienController::class, 'index'])->name('datapasien');
