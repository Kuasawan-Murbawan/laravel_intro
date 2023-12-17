<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career; // Import the Career class

class CareerController extends Controller
{
    public function basic(){
        echo "This routing is done using CareerController (basic) <br>";
        echo "<a href='/'>Homepage</a>  <br>";
        echo "<a href='/careers/admin'>Career Page for admin</a>  <br>";
    }

    public function adminPage($adminName){
        echo "This routing is done using CareerController (adminPage) <br>";

        return view('components/careers', compact('adminName'));    }

    public function positions(){
        return view('components/careers', 
            ['careers' => Career::all() // passing all records in database
        ]);

    }
}
