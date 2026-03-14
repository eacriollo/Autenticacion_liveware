<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('tasks', \App\Http\Controllers\TaskController::class);

    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
});

require __DIR__.'/auth.php';
