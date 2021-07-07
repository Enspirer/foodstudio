<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CorporateNews;
use App\Models\TenantNews;
use App\Models\Video;
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
        $tnews = DB::table('tenant_news')->orderBy('order', 'ASC')->get();

        return view('frontend.media_tenant',[
            'tnews' => $tnews
        ]);
    }
    public function video()
    {

        $videos = DB::table('videos')->orderBy('order', 'ASC')->get();
        $defaultvideo = DB::table('videos')->orderBy('order', 'ASC')->first();
        // dd($defaultvideo);

        return view('frontend.media_video',[
            'videos' => $videos,
            'defaultvideo' => $defaultvideo
        ]);
    }
    public function social()
    {
        $socialres = DB::table('social_responsibilities')->orderBy('order', 'DESC')->get();


        return view('frontend.media_social',[
            'socialres' => $socialres
            // 'defaultvideo' => $defaultvideo
        ]);
    }
}
