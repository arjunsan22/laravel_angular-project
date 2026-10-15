<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function(){
    return response()-> json([
        'status' => 'success',
        'message' => 'Hello Arjun , this data comes from backend laravel api route',
    ]);
});
