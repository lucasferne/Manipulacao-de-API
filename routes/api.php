<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', \App\Http\Controllers\UserController::class);
Route::apiResource('users.posts', \App\Http\Controllers\PostController::class);

Route::apiResource('posts', \App\Http\Controllers\Post_CommentController::class);
Route::apiResource('posts.comments', \App\Http\Controllers\CommentController::class);

Route::apiResource('comments', \App\Http\Controllers\CommentController::class);