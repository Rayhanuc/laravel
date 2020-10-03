<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\MainController as Controller;

class MainController extends Controller
{
    function sayHi(){
        return "hello world  -  from the controller";
    }

    function sayMyName($name){
        echo "Hello {$name}";
    }

    function postRequest(Request $request){
        $name = $request->post('name');
    }
}
