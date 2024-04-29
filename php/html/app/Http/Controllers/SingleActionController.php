<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SingleActionController extends Controller
{
    //
    public function __invoke(Request $request, Response $response){
        $response->setContent("シングルコントローラーです。");
        return $response;
    }
}
