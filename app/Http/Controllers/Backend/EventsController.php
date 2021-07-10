<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\Events;

class EventsController extends Controller
{    
    
    public function index()
    {
        return view('backend.events.index');
    }

    public function store(Request $request)
    {        
        // dd($request);

        $this->validate($request, [
            'image'  => 'mimes:jpeg,png,jpg|max:25000|dimensions:width=644,height=561',
            'des_title' => 'max:30',
            'description' => 'max:330'
        ]);

        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/events'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        }           
        
        $addevents = new Events;

        $addevents->title=$request->title;
        $addevents->title_html=$request->html;
        $addevents->description_title=$request->des_title;
        $addevents->description=$request->description;
        $addevents->order=$request->order;
        $addevents->status=$request->status;
        $addevents->image=$image_url;
        // $addevents->link=$request->link;

        $addevents->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Events::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.events.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/events/',$data->image).'" style="width: 100%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function update(Request $request)
    {        
        // dd($request);

        $this->validate($request, [
            'image'  => 'mimes:jpeg,png,jpg|max:25000|dimensions:width=644,height=561',
            'des_title' => 'max:30',
            'description' => 'max:330'
        ]);

       
        if($request->file('image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->image->move(public_path('files/events'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Events::where('id',$request->hidden_id)->first();
            $image_url = $detail->image;            
        }                 
        
        $updateevents = new Events;

        $updateevents->title=$request->title;
        $updateevents->title_html=$request->html;
        $updateevents->description_title=$request->des_title;
        $updateevents->description=$request->description;
        $updateevents->order=$request->order;
        $updateevents->status=$request->status;
        $updateevents->image=$image_url;
        // $updateevents->link=$request->link;

        Events::whereId($request->hidden_id)->update($updateevents->toArray());
               
        return redirect()->route('admin.events.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function edit($id)
    {        
        $events = Events::where('id',$id)->first();

        return view('backend.events.edit',[
            'events' => $events            
        ]);  
    }

    public function destroy($id)
    {  
        // DB::table('branches')->where('id', $id)->delete();  
        Events::where('id', $id)->delete();  
    }


}
