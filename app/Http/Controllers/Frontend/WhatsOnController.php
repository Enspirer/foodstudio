<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeatureEvents;
use App\Models\Promotions;
use App\Models\Vouchers;
use DB;

class WhatsOnController extends Controller
{
    public function index()
    {
        $features = DB::table('feature_events')->get();
        $promotions = DB::table('promotions')->get();
        $vouchers = DB::table('vouchers')->get();


        return view('frontend.whats_on',[
            'features' => $features,
            'promotions' => $promotions,
            'vouchers' => $vouchers

        ]);
    }
}
