<?php

namespace App\Http\Controllers;
use App\Models\Career;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function store(){  //where we store the form position

        $career = Career::create([
            'position' => request()->get('positionName'),
            'salary' => request()->get('positionSalary')
        ]);
        $career -> save();

        return redirect()->route('careers')->with('success','Position created successfully');

    }
}
