<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\AuthController;
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

    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'

    ], function ($router) {
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/refresh', [AuthController::class, 'refresh']);
        Route::get('/user-profile', [AuthController::class, 'userProfile']);
    });


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
