<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ArticleController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ReservationController::class)->middleware(['auth'])->group(function(){
    Route::get('/reservations',  'index')->name('reservation.index');
    Route::get('/reservations/create', 'create')->name('reservation.create');
    Route::post('/reservations', 'store')->name('reservation.store');
    Route::delete('/reservations/{reservation}', 'destroy')->name('reservation.destroy');
    Route::get('/reservations/showReservationForm',  'showReservationForm');
});

 Route::controller(ChildController::class)->middleware(['auth'])->group(function(){
     Route::get('/', 'index')->name('index');
     Route::post('/children', 'store')->name('store');
     Route::get('/children/create', 'create')->name('create');
     Route::get('/children/{child}', 'show')->name('show');
     Route::put('/children/{child}', 'update')->name('update');
     Route::delete('/children/{child}', 'delete')->name('delete');
     Route::get('/children/{child}/edit', 'edit')->name('edit');
});

 Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ArticleController::class)->group(function(){
    Route::get('/search', 'index')->name('articles.index');
    Route::post('/search', 'search')->name('articles.search');
    
    });

require __DIR__.'/auth.php';