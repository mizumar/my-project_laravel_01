<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//リスト3-16
Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);
