<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::get('/author/index', [AuthorController::class, 'index'])->name('author.create');
Route::post('/author', [AuthorController::class, 'store'])->name('author.store');