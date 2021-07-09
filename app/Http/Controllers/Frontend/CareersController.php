<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobOpportunity;
use App\Models\Candidates;
use DB;

class CareersController extends Controller
{
    public function index()
    {
        $jobs = DB::table('job_opportunities')->orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();
        // dd($jobs);
        return view('frontend.careers',[
            'jobs' => $jobs
        ]);
    }

    public function store(Request $request)
    {        
        // dd($request);

        // $this->validate($request, [
        //     'cv_upload'  => 'mimes:pdf,doc|max:50000'
        // ]);
        
        if($request->file('cv_upload'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->cv_upload->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->cv_upload->move(public_path('files/cv'), $preview_fileName1);
            $cv_url1 = $preview_fileName1;
        }else{
            $cv_url1 = null;
        } 
        
        $addgjob = new Candidates;

        $addgjob->name=$request->gname;
        $addgjob->email=$request->gemail;
        $addgjob->contact=$request->gcontact;
        $addgjob->position=$request->gposition;
        $addgjob->message=$request->gmsg;
        $addgjob->cv=$cv_url1; 
        // dd($addgjob);

        $addgjob->save();

        session()->flash('message','Thanks!');

        return back();    
    }

    public function storejob(Request $request)
    {        
        // dd($request);

        // $this->validate($request, [
        //     'cv_upload'  => 'mimes:pdf,doc|max:50000'
        // ]);

        if($request->file('cv_upload'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->cv_upload->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->cv_upload->move(public_path('files/cv'), $preview_fileName1);
            $cv_url1 = $preview_fileName1;
        }else{
            $cv_url1 = null;
        } 
        
        $addojob = new Candidates;

        $addojob->name=$request->oname;
        $addojob->email=$request->oemail;
        $addojob->contact=$request->ocontact;
        $addojob->position=$request->oposition;
        $addojob->message=$request->omsg;
        $addojob->cv=$cv_url1; 
        // dd($addojob);

        $addojob->save();

        session()->flash('message','Thanks!');

        return back();    
    }

}
