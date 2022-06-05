<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\StudentController;




//Route::apiResource('/class',[ClassController::class]);
Route::apiResource('/class', ClassController::class);
Route::apiResource('/subject', SubjectController::class);
Route::apiResource('/section', SectionController::class);
Route::apiResource('/student', StudentController::class);



