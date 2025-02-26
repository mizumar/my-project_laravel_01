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
    // リスト 3-22
    public function index()
    {
        $data = [
            ['name' => '山田太郎', 'mail' => 'taro@yamada'],
            ['name' => '田中花子', 'mail' => 'hanako@tanaka'],
            ['name' => '鈴木さちこ', 'mail' => 'sathiko@suzuki']
        ];
        return view('hello.index', [
            'data' => $data,
            'message' => 'Hello from Controller!'
        ]);
    }

    public function post(Request $request)
    {
        $data = ['one', 'two', 'three', 'four', 'five'];
        return view('hello.index', ['msg' => $request->msg], ['data' => $data]);
    }
}
