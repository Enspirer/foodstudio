<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Models\CorporateNews;

class CorporateNewsController extends Controller
{
    public function index()
    {
        return view('backend.corporate_news.index');
    }


    public function store(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/corporate_news'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{
            $image_url1 = null;
        } 

        if($request->topnews == 1)
        {
            // $topnews = DB::table('corporate_news')->update(array('top_news' => 0));
            $topnews = DB::table('corporate_news')->where('top_news', '=', 1)->update(array('top_news' => 0));           
        }
        if($request->featuredstory == 1)
        {            
            $featuredstory = DB::table('corporate_news')->where('feature_story', '=', 1)->update(array('feature_story' => 0));           
        }

        $addcnews = new CorporateNews;

        $addcnews->title=$request->title;
        $addcnews->description=$request->description;
        $addcnews->image=$image_url1;        
        $addcnews->link=$request->link;
        $addcnews->order=$request->order;
        $addcnews->top_news=$request->topnews;
        $addcnews->feature_story=$request->featuredstory;

        $addcnews->save();

        return back()->withFlashSuccess('Added Successfully');    
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = CorporateNews::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.corporatenews.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->addColumn('image', function($data){
                        $img = '<img src="'.url('files/corporate_news/',$data->image).'" style="width: 70%">';
                     
                        return $img;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $corporatenews = CorporateNews::where('id',$id)->first();

        return view('backend.corporate_news.edit',[
            'corporatenews' => $corporatenews            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->file('image'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->image->move(public_path('files/corporate_news'), $preview_fileName1);
            $image_url1 = $preview_fileName1;
        }else{            
            $detail = CorporateNews::where('id',$request->hidden_id)->first();
            $image_url1 = $detail->image;            
        } 

        if($request->topnews == 1)
        {
            // $topnews = DB::table('corporate_news')->update(array('top_news' => 0));
            $topnews = DB::table('corporate_news')->where('top_news', '=', 1)->update(array('top_news' => 0));           
        }
        if($request->featuredstory == 1)
        {            
            $featuredstory = DB::table('corporate_news')->where('feature_story', '=', 1)->update(array('feature_story' => 0));           
        }

        $updatecnews = new CorporateNews;

        $updatecnews->title=$request->title;
        $updatecnews->description=$request->description;
        $updatecnews->image=$image_url1;        
        $updatecnews->link=$request->link;
        $updatecnews->order=$request->order;
        $updatecnews->top_news=$request->topnews;
        $updatecnews->feature_story=$request->featuredstory;

        CorporateNews::whereId($request->hidden_id)->update($updatecnews->toArray());

        return redirect()->route('admin.corporatenews.index')->withFlashSuccess('Updated Successfully');   
    }

    public function destroy($id)
    {
        $data = CorporateNews::findOrFail($id);
        $data->delete();
    }


}
