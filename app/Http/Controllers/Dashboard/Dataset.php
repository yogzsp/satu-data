<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dataset extends Controller
{
    //
    public function index(){
        return view("pages.dashboard.dataset.index");
    }

    public function select(Request $request){
        // return view("pages.dashboard.dataset.")
    }
}
