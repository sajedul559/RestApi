<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\AuthController;





//Route::apiResource('/class',[ClassController::class]);
Route::apiResource('/class', ClassController::class);
Route::apiResource('/subject', SubjectController::class);
Route::apiResource('/section', SectionController::class);
Route::apiResource('/student', StudentController::class);


Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('refresh',[AuthController::class,'refresh']);
    Route::post('me',[AuthController::class,'me']);

    // Route::post('login',[AuthController::class,'login']);
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');

});
