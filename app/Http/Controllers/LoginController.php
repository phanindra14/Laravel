<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index(){
        //$brand_logo =  Storage::url('mepma_logo1.png');
        return view('login');
    }

    public function CheckingLoginDetails(){
        
    }
}
