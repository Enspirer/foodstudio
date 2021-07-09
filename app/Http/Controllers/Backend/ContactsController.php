<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\ContactUs;

class ContactsController extends Controller
{
    public function index()
    {
        return view('backend.contacts.index');
    }


    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = ContactUs::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.contactus.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fa fa-eye"></i> View </a>';
                                              
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> <i class="fas fa-trash"></i>&nbsp;Delete</button>';
                        return $button;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

   
    public function edit($id)
    {        
        $edit = ContactUs::where('id',$id)->first();

        return view('backend.contacts.edit',[
            'edit' => $edit            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);

        $updatestatus = new ContactUs;

        $updatestatus->status='Seen';

        ContactUs::whereId($request->hidden_id)->update($updatestatus->toArray());
               
        return redirect()->route('admin.contactus.index');                      

    }

    
    public function delete($id)
    {
        $data = ContactUs::findOrFail($id);
        $data->delete();
    }


}
