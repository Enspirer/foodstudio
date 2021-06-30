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

        // $datas = DB::table('teams')->get()->groupBy('jobgroup_name');

        // $datastwo = DB::table('job_groups')->get()->groupBy('html_code');
        // dd($datas);

        $datas = DB::table('job_groups')->orderBy('order', 'ASC')->get();

       
   
        // dd($datas);


        return view('frontend.about_us',[
            'datas' => $datas
            // 'datastwo' => $datastwo
        ]);
    }
}
