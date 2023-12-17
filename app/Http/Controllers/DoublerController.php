<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoublerController extends Controller
{
    public function index($input){
        echo "This is Doubler Controller<br>";
        echo "The number you put is " . $input . "<br>";
        echo "The result is: " . $input*2; 
    }
}
