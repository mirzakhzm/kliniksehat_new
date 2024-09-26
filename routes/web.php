<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemeriksaanController;

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

Route::get('/jenispemeriksaan', [PemeriksaanController::class, 'index'])->name('jenispemeriksaan');
Route::post('/jenispemeriksaan', [PemeriksaanController::class, 'store'])->name('jenispemeriksaan.store');
Route::put('/jenispemeriksaan/{id}', [PemeriksaanController::class, 'update'])->name('jenispemeriksaan.update');
Route::delete('/jenispemeriksaan/{id}', [PemeriksaanController::class, 'destroy'])->name('jenispemeriksaan.destroy');

Route::get('/tambahpasien', function () { //perhatikan
    return view('tambahpasien');
})->name('tambahpasien');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/datapasien', [PasienController::class, 'index'])->name('datapasien');
