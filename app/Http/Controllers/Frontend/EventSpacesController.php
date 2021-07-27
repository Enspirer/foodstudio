<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservations;
use DB;
use Mail;  
use \App\Mail\ReservationMail;

class EventSpacesController extends Controller
{
    public function index()
    {
        // $events = Events::orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        $events = DB::table('events')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        // dd($events);

        return view('frontend.event_spaces',[
            'events' => $events
        ]);
    }

    public function store(Request $request)
    {        
        // dd($request);

        if($request->get('g-recaptcha-response') == null){
            return back()->with('error', 'Error!.....Please fill reCAPTCHA!');
        } 
                
        $reservation = new Reservations;

        $reservation->date=$request->date;
        $reservation->time=$request->time;
        $reservation->title=$request->title;
        $reservation->name=$request->name;
        $reservation->email=$request->email;
        $reservation->phone=$request->phone;
        $reservation->status='Pending'; 
        // dd($reservation);

        $reservation->save();

        $details = [
            'date' => $request->date,
            'time' => $request->time,
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        \Mail::to('info@foodstudio.lk')->send(new ReservationMail($details));

        session()->flash('message','Thanks!');

        return back()->withFlashSuccess('Added Successfully');    
    }


}
