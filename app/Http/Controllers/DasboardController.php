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
    public function activerules(){
        return view('layouts.activeRules',[
            'classrooms'=> Classroom::all()
        ]);
    }
    public function modifyrule(){
        return view('layouts.modifyRule',[
            'classrooms'=> Classroom::all()
        ]);
    }
}
