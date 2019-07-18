<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('register', 'Security\AuthController@register');
    Route::post('recover', 'Security\AuthController@recover');

    Route::post('login', 'Security\AuthController@login');
    Route::post('logout', 'Security\AuthController@logout');

    Route::post('refresh', 'Security\AuthController@refresh');
    Route::post('profile', 'Security\AuthController@me');

});

Route::apiResource('/departments', 'DepartmentsController');
