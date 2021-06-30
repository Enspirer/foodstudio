<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Tenant;
use App\Models\TenantsAttachment;
use DB;

class TenantAndCuisineController extends Controller
{
    public function index($id)
    {
        // return view('frontend.tenant_and_cuisines');

        $datas = DB::table('branches')->orderBy('order', 'ASC')->get();
        $data = TenantsAttachment::where('branch_id',$id)->get();
        // dd($data);
        $tenants_id = [];
        foreach($data as $data_attachment){
            array_push($tenants_id,$data_attachment->tenant_id);
        }
        // dd($tenants_id);

        $tenants = Tenant::whereIn('id',$tenants_id)->get();
        // dd($tenants);

        // dd($data);
   
        // dd($datas);

        return view('frontend.tenant_and_cuisines',[
            'datas' => $datas,
            'tenants' => $tenants
        ]);



    }
}
