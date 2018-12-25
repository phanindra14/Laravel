<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AddStudentController extends Controller
{
    public function index(){
        return view('addstudent');
    }
    
}
