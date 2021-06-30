<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use DB;

class ContactUsController extends Controller
{
    public function index()
    {

        $datas = DB::table('branches')->orderBy('order', 'ASC')->get();

        return view('frontend.contact_us',[
            'datas' => $datas
        ]);
    }
}
