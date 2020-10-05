<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function main(){
        return view("welcome");
    }

    function features(){
        return view("features");
    }

    function contact(){
        return view("contact");
    }

    function allPeople(){
        // return(DB::table('people')->get());
        // return(DB::table('people')->where('id',1)->get());
        // return(DB::table('people')->where('id','>',1)->get());
        // return(DB::table('people')->where('id','>',1)->limit(1)->get());
        // return(DB::table('people')->where('id','>',1)->limit(2)->get());
        // return((array) DB::table('people')->where('id','>',1)->first());
        // return((array) DB::table('people')->where('id','>',1)->limit(3)->get());
        
        /* return( DB::table('people')
        ->where('id','>',1)
        ->orderBy('id','desc')
        ->limit(3)
        ->get()); */
        // return((array) DB::table('people')->where('id','>',1)->first());
        return(DB::table('people')
        // ->select(['id','name'])
        ->where('id','>',2)
        ->where('id','<',4)
        ->orderBy('id','desc')
        ->limit(3)
        ->get(['id','name']) 
        );

        // return (DB::select("select id, name from people"));
        
    }
}
