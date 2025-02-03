<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){  
Route::get('/', [MusicController::class,'index'])->name('index');
//Route::get('/', [ReviewController::class,'index']);




//Route::get('/music/create', [MusicController::class, 'create']);
Route::get('/music/{music}', [MusicController::class ,'show']);


Route::post('/music/{music}/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->middleware('auth')->name('comments.destroy');

//Route::post('/music', [MusicController::class, 'store']);
//Route::post('/music/{music}/reviews', [ReviewController::class, 'store'])->middleware('auth');

//Route::get('/music/{music}/reviews', [ReviewController::class, 'show']);
//Route::get('/music/{music}/edit', [MusicController::class, 'edit']);
//Route::put('/music/{music}', [MusicController::class, 'update']);
});


Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//Route::get('/ranking', [MusicController::class, 'ranking']);
//Route::get('/genre/{genreId}/ranking', [MusicController::class, 'genreRanking']);
});

require __DIR__.'/auth.php';
