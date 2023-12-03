<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Data extends Controller
{
    //
    public function index(){
        return view("pages.dashboard.data");
    }
}
