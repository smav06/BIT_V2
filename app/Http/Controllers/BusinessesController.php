<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessesController extends Controller
{
    //

    public function index()
    {
        $nature = \DB::TABLE('R_BUSINESS_NATURE')
                ->PLUCK('BUSINESS_NATURE_NAME','BUSINESS_NATURE_ID');

        $location = \DB::TABLE('R_BARANGAY_ZONE')
                  ->PLUCK('BARANGAY_ZONE_NAME','BARANGAY_ZONE_ID');

	    $records = \DB::TABLE('T_BUSINESS_INFORMATION AS BI')
                    ->SELECT('BI.BUSINESS_ID','BI.BUSINESS_OWNER', 'BI.BUSINESS_ADDRESS', 'BI.TRADE_NAME', 'BI.BUSINESS_OR_NUMBER','BI.ACTIVE_FLAG')
                    ->GET();
                    
        return view('business.businesses',compact('nature','location','records'));

    }

}
