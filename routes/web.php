<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'home'])->name('home');

//student


Route::prefix('/student')->group(function () {
    Route::get('/', [StudentController::class, 'student'])->name('student');
    Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    // Route::get('/edit', [StudentController::class, 'edit'])->name('student.edit');
    // Route::get('/{task_id}/update', [StudentController::class, 'update'])->name('student.update');
    Route::get('/{task_id}/delete', [StudentController::class, 'delete'])->name('student.delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
