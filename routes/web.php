<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';

/* --- 教材コード --- */
Route::get('/', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('posts.index');

Route::prefix('posts')->middleware(['auth', 'verified'])->group(function () {
    Route::get('', [PostController::class, 'index'])->name('posts.index');
    Route::post('', [PostController::class, 'store'])->name('posts.store');
    Route::get('create', [PostController::class, 'create'])->name('posts.create');
    Route::get('{post}', [PostController::class, 'show'])->name('posts.show');
    Route::patch('{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});