<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Team;
use App\Models\JobGroup;

class TeamController extends Controller
{
    
    public function index()
    {
        $data = JobGroup::all();

        return view('backend.team.index',[
            'jobgroup' => $data 
        ]);
    }

    public function add_team(Request $request)
    {        
        // dd($request);

        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/profile'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        }
        

        // $request->validate([
        //     'name' => 'required',
        //     'role' => 'required',
        //     'jobgroup' => 'required',
        //     'description' => 'required',
        //     'image' => 'required'
            
        // ]);

        $addteam = new Team;

        $addteam->name=$request->name;
        $addteam->job_role=$request->role;
        $addteam->jobgroup_name=$request->jobgroup;
        $addteam->description=$request->description;
        $addteam->image=$image_url;

        $addteam->save();

        return back();                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Team::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        // $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm">Edit</button>';
                        $button = '<a href="'.route('admin.team.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button2 = '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button . $button2;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function update_team(Request $request)
    {    
        // dd($request);
        // $request->validate([
        //     'name' => 'required',
        //     'role' => 'required',
        //     'jobgroup' => 'required',
        //     'description' => 'required'
        // ]);    

        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/profile'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        }

        $updateteam = new Team;
        $updateteam->name=$request->name;
        $updateteam->job_role=$request->role;
        $updateteam->jobgroup_name=$request->jobgroup;
        $updateteam->description=$request->description;
        $updateteam->image=$image_url;
   
        Team::whereId($request->hidden_id)->update($updateteam->toArray());
               
        return redirect()->route('admin.team.index');                  

    }

    public function edit($id)
    {
        
        $team = Team::where('id',$id)->first() ;
        
        // dd($team);

        $groups = JobGroup::all();  //for dropdown box
        // dd($groups);    

        return view('backend.team.edit',[
            'team' => $team,
            'groups' => $groups
            
        ]);    

    }

    public function destroy($id)
    {
        $data = Team::findOrFail($id);
        $data->delete();
    }









}
