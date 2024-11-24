<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class IndexController extends Controller
{
    public function index(){
        return view('index',[
            'classrooms'=> Classroom::all()
        ]);
    }
}
