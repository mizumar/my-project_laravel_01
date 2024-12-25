<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end  = '</body></html>';
function tag($tag, $txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}


class HelloController extends Controller
{

    // リスト 3-10
    public function index(Request $request)
    {
        $data = [
            'msg' => 'これはコントローラーから渡されたメッセージです。。。',
            'id' => $request->id
        ];
        return view('hello.index', $data);
    }


    // public function index(Request $request, Response $response)
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/Index') . $style .
    //         $body .
    //         tag('h1', 'Hello') .
    //         tag('h3', 'Request') .
    //         '<pre>' . $request . '</pre>' .
    //         tag('h3', 'Response') .
    //         '<pre>' . $response . '</pre>' .
    //         tag('h3', 'その他いろいろ') .
    //         '<p>url : ' . $request->url() . '</p>' .
    //         '<p>fullUrl : ' . $request->fullUrl() . '</p>' .
    //         '<p>path : ' . $request->path() . '</p>' .
    //         '<p>status : ' . $response->status() . '</p>' .
    //         '<p>content : ' . $response->content() . '</p>' .
    //         $end;

    //     $response->setContent($html);
    //     return $response;
    // }

    // public function __invoke()
    // {
    //     global $head, $style, $body, $end;
    //     $html = $head . tag('title', 'Hello') . $style .
    //         $body .
    //         tag('h1', 'Single Action') .
    //         tag('p', 'これはシングルアクションのページです。') .
    //         $end;
    //     return $html;
    // }

    // public function index()
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/index') . $style .
    //         $body .
    //         tag('h1', 'Index') .
    //         tag('p', 'これは、HalloコントローラーのIndexアクションです。') .
    //         '<a href="other">go to other page</a>' .
    //         $end;
    //     return $html;
    // }

    // public function other()
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/other') . $style .
    //         $body .
    //         tag('h1', 'Other') .
    //         tag('p', 'this is other page.') .
    //         $end;
    //     return $html;
    // }
}
