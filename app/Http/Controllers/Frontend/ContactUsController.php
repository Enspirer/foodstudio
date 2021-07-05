<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\ContactUs;
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

    public function store(Request $request)
    {        
        // dd($request);
                
        $contactus = new ContactUs;

        $contactus->name=$request->name;
        $contactus->email=$request->email;
        $contactus->contact=$request->contact;
        $contactus->subject=$request->subject;
        $contactus->message=$request->message;
        $contactus->status='Pending'; 
        // dd($contactus);

        $contactus->save();

        return back()->withFlashSuccess('Added Successfully');    
    }


}
