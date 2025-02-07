<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello', 'HelloController@index'); 古い書き方らしい
// Route::get('hello', [HelloController::class, 'index']);

// Route::get('hello', function () {
//     return view('hello.index');
// });

//リスト3-16
Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);

// Route::get('hello', HelloController::class);

//Route::get('hello/other', [HelloController::class, 'other']);

/*
Route::get('hello/{id?}/{pass?}', function ($id = '555', $pass = 'password') {

    $html = <<<EOF
    <html>
    <head>
    <title>hello</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px;}
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$id}</p>
        <p>{$pass}</p>
        <p>これはサンプルページです。</p>
    </body>
    </html>
    EOF;

    return $html;
});
*/
