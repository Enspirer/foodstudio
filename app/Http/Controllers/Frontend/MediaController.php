<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        return view('frontend.media');
    }

    public function tenant()
    {
        return view('frontend.media_tenant');
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
