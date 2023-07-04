<?php

use Core\Http\Controllers\Comment\CommentStoreAction;
use Core\Http\Controllers\Post\PostStoreAction;
use Core\Http\Controllers\User\UserLoginAction;
use Core\Http\Controllers\User\UserRegisterAction;
use Core\Http\Controllers\User\UserShowAction;
use Core\Http\Controllers\Video\VideoShowAction;
use Core\Http\Controllers\Video\VideoStoreAction;
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

Route::post('register', UserRegisterAction::class);
Route::post('login', UserLoginAction::class);
Route::post('store', UserLoginAction::class);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user/show/{id}', UserShowAction::class);
    Route::post('post/store', PostStoreAction::class);
    Route::POST('/comment/{id}/{type}', CommentStoreAction::class);
    Route::POST('/video/store', VideoStoreAction::class);
    Route::get('/video/{id}', VideoShowAction::class);
});

