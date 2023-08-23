<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\LoggedController;


Route :: get('/', [MainController :: class, 'index']) -> name('welcome');

Route :: get('/show/{id}', [LoggedController :: class, 'show']) -> name('show');

Route :: get('/create', [LoggedController :: class, 'create'])
    -> middleware(['auth'])
    -> name('create');

Route :: post('/store', [LoggedController :: class, 'store'])
    -> middleware(['auth'])
    -> name('store');

Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])
    ->middleware(['auth'])
    ->name('edit');

Route::put('/project/{id}', [ProjectController::class, 'update'])
    ->middleware(['auth'])
    ->name('update');

Route::delete('/project/{id}/picture', [ProjectController::class, 'deletePicture'])
    ->name('picture.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


