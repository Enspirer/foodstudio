<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Video;

class VideoController extends Controller
{
    
    public function index()
    {
        return view('backend.video.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        if($request->file('thumbnail'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->thumbnail->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->thumbnail->move(public_path('files/video_thumbnail'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 
        
        $addvideo = new Video;

        $addvideo->title=$request->title;
        $addvideo->description=$request->description;
        $addvideo->thumbnail=$image_url1;        
        $addvideo->link=$request->link;
        $addvideo->order=$request->order;

        $addvideo->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Video::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.video.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/video_thumbnail/',$data->thumbnail).'" style="width: 70%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $video = Video::where('id',$id)->first();

        return view('backend.video.edit',[
            'video' => $video            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->file('thumbnail'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->thumbnail->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->thumbnail->move(public_path('files/video_thumbnail'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = Video::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->thumbnail;            
        } 
        
        $updatevideo = new Video;

        $updatevideo->title=$request->title;
        $updatevideo->description=$request->description;
        $updatevideo->thumbnail=$image_url1;        
        $updatevideo->link=$request->link;
        $updatevideo->order=$request->order;

        Video::whereId($request->hidden_id)->update($updatevideo->toArray());

        return redirect()->route('admin.video.index')->withFlashSuccess('Updated Successfully');   
    }

    public function destroy($id)
    {
        $data = Video::findOrFail($id);
        $data->delete();
    }



}
