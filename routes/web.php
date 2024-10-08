<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::get('/author/index', [AuthorController::class, 'index'])->name('author.index');
Route::get('/author/destroy', [AuthorController::class, 'destroy'])->name('author.destroy');
Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('author.update');