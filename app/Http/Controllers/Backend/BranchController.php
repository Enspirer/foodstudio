<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Branch;
use App\Models\Tenant;
use App\Models\TenantsAttachment;


class BranchController extends Controller
{
    public function index()
    {
        return view('backend.location_tenants.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $this->validate($request, [
            'background_image'  => 'mimes:jpeg,png,jpg|max:25000|dimensions:width=1280,height=800'
        ]);

        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/branch_logo'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        } 
        if($request->file('background_image'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->background_image->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->background_image->move(public_path('files/branch_logo'), $preview_fileName2);
            $image_url2 = $preview_fileName2;
        }else{
            $image_url2 = null;
        }      
        
        $addbranch = new Branch;

        $addbranch->name=$request->name;
        $addbranch->address=$request->address;
        $addbranch->email=$request->email;
        $addbranch->contact_number=$request->number;
        $addbranch->order=$request->order;
        $addbranch->description=$request->description;
        $addbranch->logo=$image_url;
        $addbranch->image=$image_url2;

        $addbranch->save();

        return back()->withFlashSuccess('Added Successfully');   
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Branch::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.tenant.cuisine_index',$data->id).'" name="cuisine" id="'.$data->id.'" class="cuisine btn btn-warning btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-utensils"></i> Tenants</a>';
                        $button2 = '<a href="'.route('admin.tenant.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button3 = '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button . $button2 . $button3;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function update(Request $request)
    {        
        // dd($request);

        $this->validate($request, [
            'background_image'  => 'mimes:jpeg,png,jpg|max:25000|dimensions:width=1280,height=800'
        ]);

        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/branch_logo'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Branch::where('id',$request->hidden_id)->first();
            $image_url = $detail->logo;            
        }    
        if($request->file('background_image'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->background_image->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->background_image->move(public_path('files/branch_logo'), $preview_fileName2);
            $image_url2 = $preview_fileName2;
        }else{            
            $detail = Branch::where('id',$request->hidden_id)->first();
            $image_url2 = $detail->image;            
        }     
        
        $updatebranch = new Branch;

        $updatebranch->name=$request->name;
        $updatebranch->address=$request->address;
        $updatebranch->email=$request->email;
        $updatebranch->contact_number=$request->number;
        $updatebranch->order=$request->order;
        $updatebranch->description=$request->description;
        $updatebranch->logo=$image_url;
        $updatebranch->image=$image_url2;

        Branch::whereId($request->hidden_id)->update($updatebranch->toArray());
               
        return redirect()->route('admin.tenant.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function edit($id)
    {        
        $branch = Branch::where('id',$id)->first();

        return view('backend.location_tenants.edit',[
            'branch' => $branch            
        ]);  
    }

    public function destroy($id)
    {        
        // DB::table('tenants')->where('branch_id', $id)->delete();
        DB::table('branches')->where('id', $id)->delete();  
    }

    // ***********************************************************************************


    public function cuisine_index($id)
    {        
        $branch = Branch::where('id',$id)->first();  
        $tenants = Tenant::all();     
        // dd($tenants);

        return view('backend.location_tenants.cuisine_index',[
            'branch' => $branch,
            'tenants' => $tenants
            
        ]);
    }

    public function cuisine_store(Request $request)
    {        
        // dd($request);         
        $data = TenantsAttachment::where('tenant_id',$request->selecttenant)->where('branch_id',$request->hidden_id)->first(); 
        // dd($data);
        if( $data==null ){

            $selectedtenant = new TenantsAttachment;

            $selectedtenant->branch_id=$request->hidden_id;
            $selectedtenant->tenant_id=$request->selecttenant;        
    
            $selectedtenant->save();
            return back()->withFlashSuccess('Added'); 
        }else{
            return back()->withErrors('You Already Added This Tenant');
        }
        
       
    }
   

    public function GetTableDetailsCuisine(Request $request, $id)
    {
        if($request->ajax())
        {
            $data = TenantsAttachment::where('branch_id',$id)->get();
            // $data = TenantsAttachment::latest()->get();

            return DataTables::of($data)
                    ->addColumn('name', function($data){
                        $tenantsdata = Tenant::where('id',$data->tenant_id)->first();
                        return $tenantsdata->name;
                    })
                    ->addColumn('photo', function($data){
                        $tenantsdata = Tenant::where('id',$data->tenant_id)->first();
                        $img = '<img src="'.url('files/tenants/',$tenantsdata->photo).'" style="width: 40%">';
                     
                        return $img;
                    })
                    ->addColumn('action', function($data){                       
                        $button = '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action','photo'])
                    ->make(true);
        }
        return back();
    }

    public function cuisine_destroy($id)
    {
        $data = TenantsAttachment::findOrFail($id);
        $data->delete();
        // DB::table('tenants')->where('id', $id)->delete();
       
    }

       


}
