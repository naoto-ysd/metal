<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {
    font-size:16pt;
    color:#999;
}

h1 {
    font-size:10Opt;
    text-align:right;
    color:#eee;
    margin:-40px Opx -50px Opx;
}
</style>
EOF;

$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index() {
        global $head, $style, $body, $end;

        $html = $head . tag('title','Hello/Index') . $style .
            $body
            . tag('h1','Index') . tag('p','this is Index page')
            . '<a href="/hello/other">go to Other page</a>'
            . $end;
        return $html;
    }

    public function other() {
        global $head, $style, $body, $end;

        $html = $head . tag('title','Hello/Other') . $style .
            $body
            . tag('hl','Other') . tag('p','this is Other page')
            . $end;
        return $html;
    }
}
