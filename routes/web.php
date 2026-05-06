<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\MovieController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/movies', [MovieController::class, 'index'])
    ->name('user.movies.index');


Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/staff/dashboard', function () {
    return view('staff.dashboard');
})->name('staff.dashboard');



Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';