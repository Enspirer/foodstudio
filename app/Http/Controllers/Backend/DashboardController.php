<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Reservations;
use App\Models\ContactUs;
use App\Models\Candidates;
use App\Models\Tenant;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $reservations = Reservations::all()->where('status','==','Pending')->count();
        $contactus = ContactUs::all()->where('status','==','Pending')->count();
        $candidates = Candidates::all()->count();
        $tenants = Tenant::all()->count();
        // dd($tenants);

        return view('backend.dashboard',[
            'reservations' => $reservations,
            'contactus' => $contactus,
            'candidates' => $candidates,
            'tenants' => $tenants
        ]);
    }




}
