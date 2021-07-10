<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;
// use Illuminate\Contracts\Validation\Validator;
use DataTables;
use DB;
use App\Models\FeatureEvents;
use App\Models\Promotions;
use App\Models\Vouchers;

class VouchersController extends Controller
{
    public function index()
    {
        return view('backend.vouchers.index');
    }

    public function store(Request $request)
    {        
        // dd($request); 

        $this->validate($request, [
            'image'  => 'mimes:jpeg,png,jpg|max:25000|dimensions:width=400,height=364'
        ]);

        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/vouchers'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        $addvoucher = new Vouchers;

        $addvoucher->image=$image_url1;        
        $addvoucher->description=$request->description;

        $addvoucher->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Vouchers::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.voucher.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/vouchers/',$data->image).'" style="width: 50%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $voucher = Vouchers::where('id',$id)->first();

        return view('backend.vouchers.edit',[
            'voucher' => $voucher            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $this->validate($request, [
            'image'  => 'mimes:jpeg,png,jpg|max:25000|dimensions:width=400,height=364'
        ]);

        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/vouchers'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = Vouchers::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->image;            
        } 

        $updatevoucher = new Vouchers;

        $updatevoucher->image=$image_url1;        
        $updatevoucher->description=$request->description;

        Vouchers::whereId($request->hidden_id)->update($updatevoucher->toArray());

        return redirect()->route('admin.voucher.index')->withFlashSuccess('Updated Successfully');   
    }



    public function destroy($id)
    {
        $data = Vouchers::findOrFail($id);
        $data->delete();
    }




}
