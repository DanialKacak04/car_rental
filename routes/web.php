<?php
use App\Models\Car;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
Route::post('/cars/create', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{id}', [App\Http\Controllers\CarController::class, 'show'])->name('cars.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
