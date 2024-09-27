<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/jenispemeriksaan', function () {
    return view('jenispemeriksaan');
})->name('jenispemeriksaan');

Route::get('/tambahpasien', function () { //perhatikan
    return view('tambahpasien');
})->name('tambahpasien');

Route::get('/editpasien', function () { //perhatikan
    return view('editpasien');
})->name('editpasien');



//Pasien
Route::get('/tambahpasien', [PasienController::class, 'showForm'])->name('tambahpasien');
Route::post('/addpasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/datapasien', [PasienController::class, 'index'])->name('datapasien');
Route::delete('/datapasien/pasien/{id}', [PasienController::class, 'destroy'])->name('datapasien.destroy');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Superadmin
Route::get('/superadmin', [AdminController::class, 'index'])->name('superadmin');
Route::get('/superadmin/users', [AdminController::class, 'index'])->name('superadmin.index');
Route::post('/superadmin/users', [AdminController::class, 'store'])->name('superadmin.store');
Route::put('/superadmin/users/{id}', [AdminController::class, 'update'])->name('superadmin.update');
Route::delete('/superadmin/users/{id}', [AdminController::class, 'destroy'])->name('superadmin.destroy');


Route::get('/jenispemeriksaan', [PemeriksaanController::class, 'index'])->name('jenispemeriksaan');
Route::post('/addjenispemeriksaan', [PemeriksaanController::class, 'store'])->name('jenispemeriksaan.store');
Route::put('/jenispemeriksaan/{id}', [PemeriksaanController::class, 'update'])->name('jenispemeriksaan.update');
Route::delete('/deljenispemeriksaan/{id}', [PemeriksaanController::class, 'destroy'])->name('jenispemeriksaan.destroy');

