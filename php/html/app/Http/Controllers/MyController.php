<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    function index(Request $request, Response $response){
        $response->setContent("MyContoroller、トップ");
        return $response;
    }

    function detail(Request $request, Response $response){
        $response->setContent("MyContoroller、詳細");
        return $response;
    }

    function get_param(Request $request, Response $response, int $value){
        $response->setContent("MyContoroller、ルートパラメータの取得, value=${value}");
        return $response;
    }
}
