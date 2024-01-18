<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Api\ProductController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register',[RegisterController::class,'register']);
Route::post('login',[RegisterController::class,'login']);


// Route::group(['middleware' => 'auth:sanctum'],function(){
//     Route::resource('product', ProductController::class);
// });

// Route::prefix('facebook')->name('facebook')->group(function(){




//     Route::get('callback',[FacebookController::class,'callbackFacebook'])->name('callback');
// });
Route::get('facebook/auth', [FacebookController::class, 'loginUsingFacebook'])->name('facebook.login');

Route::get('/login/facebook/callback', [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');


//Google Login Route

Route::get('/auth/google', [GoogleController::class, 'loginWithGoogle'])->name('google');



Route::any('api/auth/google/callback',[GoogleController::class,'CallBackGoogle'])->name('callback');