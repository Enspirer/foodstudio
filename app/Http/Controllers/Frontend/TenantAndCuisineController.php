<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantAndCuisineController extends Controller
{
    public function index()
    {
        return view('frontend.tenant_and_cuisines');
    }
}
