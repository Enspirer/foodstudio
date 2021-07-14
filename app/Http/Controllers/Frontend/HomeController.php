<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeatureEvents;
use App\Models\Home;
use DB;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $feature = DB::table('feature_events')->where('home_publish', '=', 'Enabled')->get();
        $images = DB::table('homes')->orderBy('order', 'DESC')->get();
        $branches = DB::table('branches')->orderBy('order', 'ASC')->get();

        // dd($images);
        // dd($feature);

        return view('frontend.index',[
            'feature' => $feature,
            'images' => $images,
            'branches' => $branches
        ]);
    }
}
