<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class FormController extends Controller
{
    function displayForm(){
        return view("form");
    }

    function saveForm(Request $request){
        $email = $request->post('email');
        $name = $request->post('name');

/* 
        if(People::whereEmail($email)->count()==0){

            $person = new People();
            $person->name = $name;
            $person->email = $email;
            $person->save();
        }
 */

        People::firstOrCreate(['email'=>$email],['name'=>$name, 'email'=>$email]);

        return redirect()->route("form.create");
    }
}
