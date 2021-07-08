<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\FeatureEvents;
use App\Models\Promotions;
use App\Models\Vouchers;

class FeatureEventsController extends Controller
{
    public function index()
    {
        return view('backend.feature_events.index');
    }

    public function store(Request $request)
    {        
        // dd($request);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);

        $addfeature = new FeatureEvents;

        $addfeature->title=$request->title;        
        $addfeature->description=$request->description;
        $addfeature->link=$request->link;
        $addfeature->home_publish=$request->status;

        $addfeature->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = FeatureEvents::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = FeatureEvents::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    public function update(Request $request)
    {        
        // dd($request);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);

        $updatefeature = new FeatureEvents;

        $updatefeature->title=$request->title;        
        $updatefeature->description=$request->description;
        $updatefeature->link=$request->link;
        $updatefeature->home_publish=$request->status;

        FeatureEvents::whereId($request->hidden_id)->update($updatefeature->toArray());

        return back()->withFlashSuccess('Updated Successfully');    
    }

    public function destroy($id)
    {
        $data = FeatureEvents::findOrFail($id);
        $data->delete();
    }







}
