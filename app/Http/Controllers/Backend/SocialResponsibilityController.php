<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\SocialResponsibility;

class SocialResponsibilityController extends Controller
{
    
    public function index()
    {
        return view('backend.social_responsibility.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/social_responsible'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 
        // dd($image_url1);
        
        $addsimage = new SocialResponsibility;

        $addsimage->title=$request->title;
        $addsimage->description=$request->description;
        $addsimage->image=$image_url1;   
        $addsimage->order=$request->order;  
        $addsimage->type=$request->type; 

        // dd($addsimage);

        $addsimage->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function storetwo(Request $request)
    {        
        // dd($request);
                
        $addsvideo = new SocialResponsibility;

        $addsvideo->title=$request->title;
        $addsvideo->description=$request->description;
        $addsvideo->video=$request->video;  
        $addsvideo->order=$request->order;  
        $addsvideo->type=$request->type; 

        $addsvideo->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = SocialResponsibility::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        if($data->type == 0){
                            $button = '<a href="'.route('admin.social.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        }else{
                            $button = '<a href="'.route('admin.social.editvid',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        }
                        
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })


                    // ->addColumn('image', function($data){
                    //     $img = '<img src="'.url('files/social_responsible/',$data->image).'" style="width: 50%">';
                     
                    //     return $img;
                    // })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $socimage = SocialResponsibility::where('id',$id)->first();

        return view('backend.social_responsibility.edit',[
            'socimage' => $socimage            
        ]);  
    }

    public function editvid($id)
    {        
        $socvid = SocialResponsibility::where('id',$id)->first();

        return view('backend.social_responsibility.editvid',[
            'socvid' => $socvid            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/social_responsible'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 
        // dd($image_url1);
        
        $updatesimage = new SocialResponsibility;

        $updatesimage->title=$request->title;
        $updatesimage->description=$request->description;
        $updatesimage->image=$image_url1;   
        $updatesimage->order=$request->order;  
        $updatesimage->type=$request->type;

        SocialResponsibility::whereId($request->hidden_id)->update($updatesimage->toArray());

        return redirect()->route('admin.social.index')->withFlashSuccess('Updated Successfully');   
    }

    public function destroy($id)
    {
        $data = SocialResponsibility::findOrFail($id);
        $data->delete();
    }



}
