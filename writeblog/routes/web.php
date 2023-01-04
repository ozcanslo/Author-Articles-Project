<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Login processes
Route::get('/home', [WriterController::class, 'homepage'])->name('home')->middleware('AuthCheck');
Route::get('/login', [WriterController::class, 'index'])->name('login');
Route::post('/writer-login', [WriterController::class, 'writerLogin'])->name('writer-login');
Route::get('/signout', [WriterController::class, 'signOut'])->name('signout')->middleware('AuthCheck');
//EndLogin

//Author processes
Route::get('/author-add', [WriterController::class, 'authorAdd'])->name('author-add')->middleware('AuthCheck');
Route::post('/author-add-post', [WriterController::class, 'authorAddPost'])->name('author-add-post');

Route::get('/author-update/{id}', [WriterController::class, 'authorUpdate'])->name('author-update')->middleware('AuthCheck');
Route::post('/author-update-post/{id}', [WriterController::class, 'authorUpdatePost'])->name('author-update-post');

Route::get('/author-list', [WriterController::class, 'authorList'])->name('author-list')->middleware('AuthCheck');
Route::get('/author-delete/{id}', [WriterController::class, 'authorDelete'])->name('author-delete')->middleware('AuthCheck');

Route::get('/delete-article/{id}', [ArticleController::class, 'delete'])->name('delete-article');
//EndAuthor

//Blog processes
Route::resource('articles', ArticleController::class)->middleware('AuthCheck');
