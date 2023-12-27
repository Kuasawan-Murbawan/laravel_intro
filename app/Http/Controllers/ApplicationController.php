<?php

namespace App\Http\Controllers;
use App\Models\Applicant; // Import the Career class


use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){

        return view('/contact', ['applicants' => Applicant::all()]);
    }

    public function store(){
        $applicant = Applicant::create([
            'fname' => request() -> get('firstName'),
            'lname' => request() -> get('lastName'),
            'university' => request() -> get('university'),
            'positionApply' => request() -> get('positionApply')
        ]);

        $applicant -> save();

        echo "Applied Successfully! <br>";

        return redirect() -> route('applications-list');
    }
}
