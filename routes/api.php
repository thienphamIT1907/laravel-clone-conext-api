<?php

  use App\Http\Controllers\UserController;
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

//  Route::post('register', 'UserController@register');
//  Route::post('login', 'UserController@login');
//
//  Route::middleware('auth:api')->group( function () {
//    Route::resource('user', UserController::class);
//  });

Route::apiResource('business-type', 'BusinessTypeController');

Route::apiResource('expertise', 'ExpertiseController');

Route::apiResource('explore', 'ExploreController');

Route::apiResource('event', 'EventController');

Route::apiResource('voucher', 'VoucherController');

Route::apiResource('workplace', 'WorkplaceController');

Route::apiResource('user', 'UserController');






