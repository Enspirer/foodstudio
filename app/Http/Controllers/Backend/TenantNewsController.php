<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\TenantNews;

class TenantNewsController extends Controller
{
    
    public function index()
    {
        return view('backend.tenant_news.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/tenant_news'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        if($request->file('logo'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->logo->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->logo->move(public_path('files/tenant_news'), $preview_fileName2);
            $image_url2 = $preview_fileName2;
        }else{
            $image_url2 = null;
        } 

        $addtnews = new TenantNews;

        $addtnews->title=$request->title;
        $addtnews->description=$request->description;       
        $addtnews->link=$request->link;
        $addtnews->order=$request->order;
        $addtnews->image=$image_url1;
        $addtnews->logo=$image_url2; 

        $addtnews->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = TenantNews::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.tenantnews.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->addColumn('logo', function($data){
                        $img = '<img src="'.url('files/tenant_news/',$data->logo).'" style="width: 60%">';
                     
                        return $img;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/tenant_news/',$data->image).'" style="width: 90%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image','logo'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $tenantnews = TenantNews::where('id',$id)->first();

        return view('backend.tenant_news.edit',[
            'tenantnews' => $tenantnews            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/tenant_news'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = TenantNews::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->image;            
        } 

        if($request->file('logo'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->logo->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->logo->move(public_path('files/tenant_news'), $preview_fileName2);
            $image_url2 = $preview_fileName2;
        }else{            
            $detail = TenantNews::where('id',$request->hidden_id)->first();
            $image_url2 = $detail->logo;            
        } 
        
        $updatetnews = new TenantNews;

        $updatetnews->title=$request->title;
        $updatetnews->description=$request->description;       
        $updatetnews->link=$request->link;
        $updatetnews->order=$request->order;
        $updatetnews->image=$image_url1;
        $updatetnews->logo=$image_url2; 

        TenantNews::whereId($request->hidden_id)->update($updatetnews->toArray());

        return redirect()->route('admin.tenantnews.index')->withFlashSuccess('Updated Successfully');   
    }

    public function destroy($id)
    {
        $data = TenantNews::findOrFail($id);
        $data->delete();
    }



}
