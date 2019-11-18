<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    //
    public function index()
    {


        // $get_issuance_type = db::table('r_issuance_category as rc')
        //                         ->select('issuance_type_id','issuance_name','issuance_date',db::raw('SUM(or_amount) as total'))
        //                         ->join('t_issuance as t','t.issuance_type_id','rc.issuance_category_id')
        //                         ->where(strtolower('t.status'),'issued')
        //                         ->wherenotnull('t.or_amount')
        //                         ->groupby('issuance_type_id','issuance_name','issuance_date')
        //                         ->get(); 

        // dd($get_issuance_type);

        $get_total_residents = DB::table('t_resident_basic_info')->count();
        $get_total_businesses = DB::table('t_business_information')->count();
        $get_total_blotters = DB::table('t_blotter')->count();
        $get_total_ordinances = DB::table('t_ordinance')->count();
        $get_total_household = DB::table('t_household_information')->count();
        
        return view('dashboard',compact('get_total_residents','get_total_businesses','get_total_blotters','get_total_ordinances','get_total_household'));
      
    }


}
