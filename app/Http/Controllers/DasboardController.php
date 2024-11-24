<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function dashboard(){
        return view('dashboard',[
            'classrooms'=> Classroom::all()
        ]);
    }

    public function newrule(){
        return view('layouts.newRule',[
            'classrooms'=> Classroom::all()
        ]);
    }
}
