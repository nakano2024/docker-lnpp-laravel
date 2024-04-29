<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Hello extends Controller
{
    //
    public function hello(Request $request, Response $response, int $user_id){
        $html=<<<EOF
        <h1>Hello World</h1>
EOF;
        $response->setContent($html."${user_id}");
        return $response;
    }
}
