<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('authors', [AuthorController::class,'index']);
Route::post('authors', [AuthorController::class,'store']);
Route::get('authors/{id}', [AuthorController::class,'show']);
Route::put('authors/{id}', [AuthorController::class,'update']);
Route::get('authors/{id}', [AuthorController::class,'destory']);

Route::get('books', [BookController::class,'index']);
Route::post('books', [BookController::class,'store']);
Route::get('books/{id}', [BookController::class,'show']);
Route::put('books/{id}', [BookController::class,'update']);
Route::get('books/{id}', [BookController::class,'destory']);