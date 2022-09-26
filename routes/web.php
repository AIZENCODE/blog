<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/',[PostController::class,'index'])->name('posts.index');

// Ruta de la vista individual de post
Route::get('post/{post}',[PostController::class, 'show'])->name('posts.show');

// Ruta de la vista de los post de dicha categoria
Route::get('category/{category}',[PostController::class, 'category'])->name('posts.category');

// Ruta de la vista de los post de dicha tag
Route::get('tag/{tag}',[PostController::class, 'tag'])->name('posts.tag');








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
