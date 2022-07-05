<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
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
Route::apiResource('post', PostsController::class)->parameters([
    'post' => 'post:slug'
]);
Route::apiResource('admin/post',AdminPostController::class)->parameters([
    'post' => 'post:slug'
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
