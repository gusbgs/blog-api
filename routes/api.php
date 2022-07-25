<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\PostCommentsController;
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


Route::prefix('admin')->group(function (){
    Route::get('comments/post/{id}',[PostCommentsController::class,'showComment']);
    Route::apiResource('post',AdminPostController::class)->parameters([
        'post' => 'post:slug'
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
