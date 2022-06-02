<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassController;


//Route::apiResource('/class',[ClassController::class]);
Route::apiResource('/class', ClassController::class);
