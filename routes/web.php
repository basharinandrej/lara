<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;

// Route::get('/posts', [PostsController::class, 'index' ])->name('posts.index');
// Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
// Route::get('/posts/create', [PostsController::class,  'create'])->name('posts.create');
// Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');

// Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
// Route::put('/posts/{post}', [PostsController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');

Route::get('/', function() {
  return view('home');
})->name('home');;

Route::resource('messages', MessagesController::class);
Route::resource('events', EventsController::class);
