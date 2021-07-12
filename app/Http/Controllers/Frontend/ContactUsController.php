<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\ContactUs;
use DB;
use Mail;  
use \App\Mail\ContactUsMail;

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

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error', 'Error!.....Please fill reCAPTCHA!');
        }        
   
        $contactus = new ContactUs;

        // dd($contactus->id);

        $contactus->name=$request->name;
        $contactus->email=$request->email;
        $contactus->contact=$request->contact;
        $contactus->subject=$request->subject;
        $contactus->message=$request->message;
        $contactus->status='Pending'; 
        // dd($contactus);

        $contactus->save();

        // dd($request->subject);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        \Mail::to('nihsaan.enspirer@gmail.com')->send(new ContactUsMail($details));

        
        session()->flash('message','Thanks!');


        return back();    
    }


}
