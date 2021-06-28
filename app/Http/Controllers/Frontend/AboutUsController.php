<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\JobGroup;
use DB;

class AboutUsController extends Controller
{
    public function index()
    {       
        // $datas = Team::all();
        // dd($datas);

        $datadirector = DB::table('teams')->get()->groupBy('jobgroup_name');
        // dd($datadirector);


        return view('frontend.about_us',[
            'datas' => $datadirector 
        ]);
    }
}
