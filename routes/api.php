<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;

Route::apiResource('/question', QuestionController::class);
Route::apiResource('/category', CategoryController::class);
Route::apiResource('/question/{question}/reply', ReplyController::class);


/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
