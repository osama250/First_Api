<?php

use App\Http\Controllers\Api\PostController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
//});

    // to get all posts
Route::get('/posts', [PostController::class,'index'] );
    // to get one post
Route::get('/post/{id}',[PostController::class,'show']);
    // to insert post
Route::post('/posts',[PostController::class,'store']);
    // to update post
Route::post('/post/{id}',[PostController::class,'update']);
    // to delete post
Route::post('/posts/{id}',[PostController::class,'destroy']);
