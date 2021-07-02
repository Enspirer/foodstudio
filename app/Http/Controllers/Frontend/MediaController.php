<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CorporateNews;
use App\Models\TenantNews;
use DB;

class MediaController extends Controller
{
    public function index()
    {

        $cnews = DB::table('corporate_news')->where('top_news', '=', 0)->where('feature_story', '=', 0)->orderBy('order', 'ASC')->get();
        $cnewstop = DB::table('corporate_news')->where('top_news', '=', 1)->get();
        $cnewsfeatured = DB::table('corporate_news')->where('feature_story', '=', 1)->get();       

        return view('frontend.media',[
            'cnews' => $cnews,
            'cnewstop' => $cnewstop,
            'cnewsfeatured' => $cnewsfeatured   
        ]);
    }

    public function tenant()
    {
        $tnews = DB::table('tenant_news')->orderBy('order', 'DESC')->get();
        // TenantNews::whereDate('created_at', date('Y-m-d'))->get();

        return view('frontend.media_tenant',[
            'tnews' => $tnews
        ]);
    }
    public function video()
    {
        return view('frontend.media_video');
    }
    public function social()
    {
        return view('frontend.media_social');
    }
}
