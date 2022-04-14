<?php

// api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/create', [App\Http\Controllers\PostController::class, 'store'])->name('create');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit']);
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete']);
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']) ->name('index');

// Route::get('/posts', function () {
//     return response()->json('hello');
// });
