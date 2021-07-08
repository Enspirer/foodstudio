<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/home_page'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        $addimage = new Home;

        $addimage->image=$image_url1;        
        $addimage->order=$request->order;

        $addimage->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Home::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.home.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/home_page/',$data->image).'" style="width: 50%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $home = Home::where('id',$id)->first();

        return view('backend.home.edit',[
            'home' => $home            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/home_page'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = Home::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->image;            
        } 

        $updatehome = new Home;

        $updatehome->image=$image_url1;        
        $updatehome->order=$request->order;

        Home::whereId($request->hidden_id)->update($updatehome->toArray());

        return redirect()->route('admin.home.index')->withFlashSuccess('Updated Successfully');   
    }



    public function destroy($id)
    {
        $data = Home::findOrFail($id);
        $data->delete();
    }


}
