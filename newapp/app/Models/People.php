<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    function displayNameAndEmail(){
        echo $this->name ." : ".$this->email;
    }

    function addJr(){
        $this->name .= " Jr";
    }
}
