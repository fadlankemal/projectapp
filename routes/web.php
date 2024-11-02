<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\OutcomingController;


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

Route::get('dashboard', [AuthController::class, 'index']);

Route::post('login', [AuthController::class, 'authenticate']);
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);

Route::post('data', [GoodController::class, 'store']);
// Route::get('index', [GoodController::class, 'index']);
Route::get('databarang/tambahdata', [GoodController::class, 'create']);
Route::get('databarang', [GoodController::class, 'index']);
Route::get('databarang/{id}/editdata', [GoodController::class, 'edit']);
Route::get('data/show{id}', [GoodController::class, 'show']);
Route::patch('data/{id}', [GoodController::class, 'update']);
Route::delete('data/{id}', [GoodController::class, 'destroy']);


Route::controller(OpController::class)->group(function () {
    Route::get('operators', 'index');
    Route::get('operators/add', 'create');
    Route::post('operators/add', 'store');

    Route::put('operators/{operator}', 'update');
    Route::get('operators/{operator:nama_operator}/edit', 'edit');

    // Route::get('operator/{operator}', 'show');
    Route::delete('operators/{operator}', 'destroy');
});

Route::post('dataop', [OpController::class, 'store']);
Route::get('dataoperator', [OpController::class, 'index']);
Route::get('dataoperator/tambahdata', [OpController::class, 'create']);
Route::get('dataoperator/{id}/editdataop', [OpController::class, 'edit']);
Route::patch('dataop/{id}', [OpController::class, 'update']);
Route::delete('dataop/{id}', [OpController::class, 'destroy']);

Route::get('barangmasuk', [IncomingController::class, 'index']);
Route::post('incoming', [IncomingController::class, 'store']);


Route::get('barangkeluar', [OutcomingController::class, 'index']);
Route::post('barangkeluar', [OutcomingController::class, 'store']);

// require __DIR__ . '/auth.php';
