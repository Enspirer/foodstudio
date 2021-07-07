<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Reservations;

class ReservationsController extends Controller
{

    public function index()
    {
        return view('backend.reservations.index');
    }
    
    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Reservations::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.reservations.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>';
                        return $button;
                    })                    
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function update(Request $request)
    {        
        // dd($request);
        
        $changestatus = new Reservations;

        $changestatus->status=$request->status;

        Reservations::whereId($request->hidden_id)->update($changestatus->toArray());
               
        return redirect()->route('admin.reservations.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function edit($id)
    {        
        $reservations = Reservations::where('id',$id)->first();

        return view('backend.reservations.edit',[
            'reservations' => $reservations            
        ]);  
    }

    public function destroy($id)
    {        
        // DB::table('tenants')->where('branch_id', $id)->delete();
        // DB::table('branches')->where('id', $id)->delete();  
        Reservations::where('id', $id)->delete();  
    }


}
