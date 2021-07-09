<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\JobOpportunity;
use App\Models\Candidates;

class JobOpportunityController extends Controller
{
    
    public function index()
    {
        return view('backend.careers.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        

        $addjobopportunity = new JobOpportunity;

        $addjobopportunity->title=$request->title;        
        $addjobopportunity->description=$request->description;
        $addjobopportunity->order=$request->order;
        $addjobopportunity->status=$request->status;

        $addjobopportunity->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = JobOpportunity::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.careers.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $jobs = JobOpportunity::where('id',$id)->first();
        // dd($jobs);

        return view('backend.careers.edit',[
            'jobs' => $jobs            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        
        $updatejobopportunity = new JobOpportunity;

        $updatejobopportunity->title=$request->title;        
        $updatejobopportunity->description=$request->description;
        $updatejobopportunity->order=$request->order;
        $updatejobopportunity->status=$request->status;
        // dd($updatejobopportunity);

        JobOpportunity::whereId($request->hidden_id)->update($updatejobopportunity->toArray());

        return redirect()->route('admin.careers.index')->withFlashSuccess('Updated Successfully');  
    }

    public function destroy($id)
    {
        $data = JobOpportunity::findOrFail($id);
        $data->delete();
    }


    // **************************** Candidate ***************************


    public function candidate_index()
    {
        return view('backend.careers.candidate');
    }


    public function candidate_GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Candidates::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        
                        $button = '<a href="'.url('files/cv',$data->cv).'" name="download" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px" target="_blank"><i class="fas fa-download"></i> Download </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    
    public function delete($id)
    {
        $data = Candidates::findOrFail($id);
        $data->delete();
    }


}
