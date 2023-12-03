<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Signup extends Controller
{
    //
    public function index(){
        return view("pages.auth.signup");
    }
}
