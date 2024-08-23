<?php
use App\Http\Controllers\AuthorController;




Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('author.update');