<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

function tag($tag, $txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}


class HelloController extends Controller
{
    // リスト 3-20
    public function index()
    {
        return view('hello.index');
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
