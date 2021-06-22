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
            'description' => 'required'
        ]);

        $addgroup = new JobGroup;

        $addgroup->user_id = auth()->user()->id;
        $addgroup->jobgroup_name=$request->name;
        $addgroup->description=$request->description;

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

        // if($request->ajax())
        // {
        //     $group = DB::table('job_groups')->orderBy('id');
            
        //     return DataTables::of($group)
        //             ->addColumn('action', function($data){
        //                 $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
        //                 $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
        //                 return $button;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // } 


    }




}
