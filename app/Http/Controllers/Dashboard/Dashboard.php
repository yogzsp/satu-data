<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Tableu;


class Dashboard extends Controller
{
    //
    public function index(){
        return view('pages.dashboard.data.list',[
            'dashboardData' => Tableu::all()
        ]);
    }

    public function detailShow(Request $request,$id){
        // $request->validate(['id' => 'required']);
        $idData = $request->query('id');
        $data = Tableu::find($id);
        return view('pages.dashboard.data.view',[
            'dataDS'=>$data,
        ]);
    }

    public function uploadDashboard(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'embed' => 'required',
        ]);

        DB::table('tableus')->insert([
            'name' => $request->input('name'),
            'embed' => $request->input('embed'),
        ]);
        // Schema::create([
            
        // ]);

        return redirect()->route('dashboard-pages')->with('success', 'Data berhasil disimpan!');
    }


}
