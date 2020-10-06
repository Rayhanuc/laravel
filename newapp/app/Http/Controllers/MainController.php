<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\People;



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

    function testModel(){
        // $people = People::all()->skip(1)->take(2);
        // $people = People::find(1);
        // $people = People::where('id','>',1)->where('id','>',4)->get();
        // $people = People::where('id','>',1)->count();
        // return $people;

        // $person = People::whereEmail('jamal@uddin.com')->first(); // get() / first()
        // $person = People::whereName('Kamal Hossen')->first()->displayNameAndEmail(); // get() / first()

        /* $person = People::find(1);
        $person->name = "Kamal Hossen 1";
        $person->save();
        $person = $person->fresh();
        return $person; */
        
        $person = People::find(1);
        $person->addJr();
        $person->fresh();

        return $person;
        // echo "Hello";
    }
}
