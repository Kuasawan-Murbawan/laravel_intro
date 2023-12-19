<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoublerController extends Controller
{
    public function index($input){
        echo "<h3>This is Doubler Controller</h3>";
        echo "The number you put is " . $input . "<br>";
        echo "The result is: " . $input*2; 

        echo '<br> <a href="/">Homepage</a>';

    }
}
