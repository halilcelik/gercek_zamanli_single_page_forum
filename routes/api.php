<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::apiResource('/question', QuestionController::class);


/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
