<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Branch;
use App\Models\Tenant;
use App\Models\TenantsAttachment;

class TenantController extends Controller
{
    public function index()
    {
        return view('backend.tenants.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        if($request->file('image1'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image1->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image1->move(public_path('files/tenants'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        if($request->file('image2'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->image2->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->image2->move(public_path('files/tenants'), $preview_fileName2);
            $image_url2 = $preview_fileName2;
        }else{
            $image_url2 = null;
        } 
        
        if($request->file('popimage'))
        {
            $preview_fileName3 = time().'_'.rand(1000,10000).'.'.$request->popimage->getClientOriginalExtension();
            $fullURLsPreviewFile3 = $request->popimage->move(public_path('files/tenants'), $preview_fileName3);
            $image_url3 = $preview_fileName3;
        }else{
            $image_url3 = null;
        }
        if($request->file('upload'))
        {
            $preview_fileName4 = time().'_'.rand(1000,10000).'.'.$request->upload->getClientOriginalExtension();
            $fullURLsPreviewFile4 = $request->upload->move(public_path('files/pdf_upload'), $preview_fileName4);
            $upload_url = $preview_fileName4;
        }else{
            $upload_url = null;
        }
        
        $addtenants = new Tenant;

        $addtenants->name=$request->name;        
        $addtenants->description=$request->description;
        $addtenants->photo=$image_url1;
        $addtenants->menu=$image_url2;
        $addtenants->pop_photo=$image_url3;
        $addtenants->upload=$upload_url;

        $addtenants->save();

        return back()->withFlashSuccess('Added Successfully');                      

    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            // $data = Tenant::where('branch_id',$id)->get();
            $data = Tenant::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.tenants.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button2 = '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>';
                        return $button . $button2;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $tenant = Tenant::where('id',$id)->first();

        return view('backend.tenants.edit',[
            'tenant' => $tenant            
        ]);    
    }

    public function update(Request $request)
    {        
        // dd($request);

        if($request->file('image1'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image1->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image1->move(public_path('files/tenants'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = Tenant::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->photo;            
        }  

        if($request->file('image2'))
        {
            $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->image2->getClientOriginalExtension();
            $fullURLsPreviewFile2 = $request->image2->move(public_path('files/tenants'), $preview_fileName2);
            $image_url2 = $preview_fileName2;
        }else{            
            $detail = Tenant::where('id',$request->hidden_id)->first();
            $image_url2 = $detail->menu;            
        }   
        if($request->file('popimage'))
        {
            $preview_fileName3 = time().'_'.rand(1000,10000).'.'.$request->popimage->getClientOriginalExtension();
            $fullURLsPreviewFile3 = $request->popimage->move(public_path('files/tenants'), $preview_fileName3);
            $image_url3 = $preview_fileName3;
        }else{            
            $detail = Tenant::where('id',$request->hidden_id)->first();
            $image_url3 = $detail->pop_photo;            
        }   
        if($request->file('upload'))
        {
            $preview_fileName4 = time().'_'.rand(1000,10000).'.'.$request->upload->getClientOriginalExtension();
            $fullURLsPreviewFile4 = $request->upload->move(public_path('files/pdf_upload'), $preview_fileName4);
            $upload_url = $preview_fileName4;
        }else{            
            $detail = Tenant::where('id',$request->hidden_id)->first();
            $upload_url = $detail->upload;            
        }     
        
        $updatetenants = new Tenant;

        $updatetenants->name=$request->name;        
        $updatetenants->description=$request->description;
        $updatetenants->photo=$image_url1;
        $updatetenants->menu=$image_url2;  
        $updatetenants->pop_photo=$image_url3;
        $updatetenants->upload=$upload_url;

        Tenant::whereId($request->hidden_id)->update($updatetenants->toArray());        
               
        return redirect()->route('admin.tenants.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function destroy($id)
    {
        $data = Tenant::findOrFail($id);
        $data->delete();
        // DB::table('tenants')->where('id', $id)->delete();       
    }











    // public function cuisine_index($id)
    // {        
    //     $branch = Branch::where('id',$id)->first();        
    //     // dd($branch);

    //     return view('backend.tenant_cuisine.cuisine_index',[
    //         'branch' => $branch
            
    //     ]);
    // }

    // public function cuisine_store(Request $request)
    // {        
    //     // dd($request);

    //     if($request->file('image1'))
    //     {
    //         $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image1->getClientOriginalExtension();
    //         $fullURLsPreviewFile1 = $request->image1->move(public_path('files/cuisine'), $preview_fileName1);
    //         $image_url1 = $preview_fileName1;
    //     }else{
    //         $image_url1 = null;
    //     } 

    //     if($request->file('image2'))
    //     {
    //         $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->image2->getClientOriginalExtension();
    //         $fullURLsPreviewFile2 = $request->image2->move(public_path('files/cuisine'), $preview_fileName2);
    //         $image_url2 = $preview_fileName2;
    //     }else{
    //         $image_url2 = null;
    //     }       
        
    //     $addcuisine = new Tenant;

    //     $addcuisine->branch_id=$request->hidden_id; 
    //     $addcuisine->name=$request->name;        
    //     $addcuisine->description=$request->description;
    //     $addcuisine->photo=$image_url1;
    //     $addcuisine->menu=$image_url2;

    //     $addcuisine->save();

    //     return back();                      

    // }

    // public function GetTableDetailsCuisine(Request $request, $id)
    // {
    //     if($request->ajax())
    //     {
    //         $data = Tenant::where('branch_id',$id)->get();
    //         // $data = Tenant::where($id)->first();
    //         return DataTables::of($data)
    //                 ->addColumn('action', function($data){
    //                     // $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm"><i class="fas fa-utensils"></i> Cuisine</button>';
    //                     // $button = '<a href="'.route('admin.tenant.cuisine_index',$data->id).'" name="cuisine" id="'.$data->id.'" class="cuisine btn btn-warning btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-utensils"></i> Cuisine</a>';
    //                     $button2 = '<a href="'.route('admin.tenant.cuisine_edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
    //                     $button3 = '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>';
    //                     return $button2 . $button3;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }
    //     return back();
    // }


    // public function cuisine_edit($id)
    // {
        
    //     $tenant = Tenant::where('id',$id)->first();
    //     // $branch = Tenant::where('branch_id',$id)->first();
    //     // $branch = Branch::where('id',$id)->first();  
    //     $branch = Tenant::where('branch_id',$id)->first();
        
    //     // dd($branch);

    //     return view('backend.tenant_cuisine.cuisine_edit',[
    //         'tenant' => $tenant,
    //         'branch' => $branch
            
    //     ]);    

    // }

    // public function cuisine_update(Request $request)
    // {        
    //     // dd($request);

    //     if($request->file('image1'))
    //     {
    //         $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image1->getClientOriginalExtension();
    //         $fullURLsPreviewFile1 = $request->image1->move(public_path('files/cuisine'), $preview_fileName1);
    //         $image_url1 = $preview_fileName1;
    //     }else{
    //         $image_url1 = null;
    //     } 

    //     if($request->file('image2'))
    //     {
    //         $preview_fileName2 = time().'_'.rand(1000,10000).'.'.$request->image2->getClientOriginalExtension();
    //         $fullURLsPreviewFile2 = $request->image2->move(public_path('files/cuisine'), $preview_fileName2);
    //         $image_url2 = $preview_fileName2;
    //     }else{
    //         $image_url2 = null;
    //     }       
        
    //     $updatecuisine = new Tenant;

    //     // $updatecuisine->branch_id=$request->hidden_id; 
    //     $updatecuisine->name=$request->name;        
    //     $updatecuisine->description=$request->description;
    //     $updatecuisine->photo=$image_url1;
    //     $updatecuisine->menu=$image_url2;
        
    //     // dd($updatecuisine);

    //     // $cuisine = DB::table('branches')
    //     // ->select('branches.id')
    //     // ->join('tenants','tenants.branch_id','=','branches.id')        
    //     // ->get();

    //     // $cuisine = Tenant::where('branch_id',$id)->first() ;

    //     Tenant::whereId($request->hidden_id)->update($updatecuisine->toArray());        
               
    //     return redirect()->route('admin.tenant.index');                      

    // }


    // public function cuisine_destroy($id)
    // {
    //     $data = Tenant::findOrFail($id);
    //     $data->delete();
    //     // DB::table('tenants')->where('id', $id)->delete();
       
    // }
}
