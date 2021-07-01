<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\FeatureEvents;
use App\Models\Promotions;
use App\Models\Vouchers;

class PromotionsController extends Controller
{
    public function index()
    {
        return view('backend.promotions.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/promotions'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        $addpromotion = new Promotions;

        $addpromotion->image=$image_url1;        
        $addpromotion->description=$request->description;
        $addpromotion->link=$request->link;

        $addpromotion->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Promotions::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.promotion.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/promotions/',$data->image).'" style="width: 40%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $promotion = Promotions::where('id',$id)->first();

        return view('backend.promotions.edit',[
            'promotion' => $promotion            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/promotions'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        $updatepromotion = new Promotions;

        $updatepromotion->image=$image_url1;        
        $updatepromotion->description=$request->description;
        $updatepromotion->link=$request->link;

        Promotions::whereId($request->hidden_id)->update($updatepromotion->toArray());

        return redirect()->route('admin.promotion.index')->withFlashSuccess('Updated Successfully');   
    }



    public function destroy($id)
    {
        $data = Promotions::findOrFail($id);
        $data->delete();
    }




}
