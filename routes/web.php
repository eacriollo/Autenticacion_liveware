<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/tasks', [TaskController::class, 'index'])
        ->middleware('permission:task.view')
        ->name('tasks.index');

    Route::get('/tasks/create', [TaskController::class, 'create'])
        ->middleware('permission:task.create')
        ->name('tasks.create');

    Route::post('/tasks', [TaskController::class, 'store'])
        ->middleware('permission:task.create')
        ->name('tasks.store');

    Route::get('/tasks/{task}', [TaskController::class, 'show'])
        ->middleware('permission:task.view')
        ->name('tasks.show');

    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])
        ->middleware('permission:task.edit')
        ->name('tasks.edit');

    Route::put('/tasks/{task}', [TaskController::class, 'update'])
        ->middleware('permission:task.edit')
        ->name('tasks.update');

    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])
        ->middleware('permission:task.delete')
        ->name('tasks.destroy');

    Route::get('/users', [UserController::class, 'index'])
        ->middleware('permission:user.view')
        ->name('users.index');
});
