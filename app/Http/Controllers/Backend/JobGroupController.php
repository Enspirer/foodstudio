<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\JobGroup;


class JobGroupController extends Controller
{
    public function index()
    {
        return view('backend.job_group.index');
    }

    public function add_job_group(Request $request)
    {        
        // dd($request);
        $request->validate([
            'name' => 'required',
            'html' => 'required',
            'description' => 'required',
            'order' => 'required'
        ]);

        $addgroup = new JobGroup;

        $addgroup->user_id = auth()->user()->id;
        $addgroup->jobgroup_name=$request->name;        
        $addgroup->html_code=$request->html;
        $addgroup->description=$request->description;
        $addgroup->order=$request->order;

        $addgroup->save();

        return back();                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = JobGroup::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function update_job(Request $request)
    {    
        $request->validate([
            'name' => 'required',
            'html' => 'required',
            'description' => 'required',
            'order' => 'required'
        ]);    

        $updategroup = new JobGroup;
        $updategroup->jobgroup_name=$request->name;
        $updategroup->html_code=$request->html;
        $updategroup->description=$request->description;
        $updategroup->order=$request->order;
   
        JobGroup::whereId($request->hidden_id)->update($updategroup->toArray());

        return back();                      

    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = JobGroup::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    public function destroy($id)
    {
        $data = JobGroup::findOrFail($id);
        $data->delete();
    }




}
