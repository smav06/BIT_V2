<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ListofResidentsController extends Controller
{
    public function index(Request $request)
    {
       
        $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')->GET();
        return view('queriesreports.listofresidentsreport', compact('DisplayTable'));
        
    }
 // dd($DisplayTable);
    public static function filterdisplay()
    {
        if(request('editcstatus')=='All') {
            $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')->GET();
        }
        else {
            request('fromdate') != '' && request('todate') !='' ?
            $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
            ->WHERE('T.CIVIL_STATUS',request('editcstatus'))
            ->WHEREBETWEEN('CREATED_AT', [request('fromdate'),request('todate')])
            ->GET()
            : $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
            ->WHERE('T.CIVIL_STATUS', request('editcstatus'))
            ->GET();
        }

        return response()->json($DisplayTable);
    }
     // \DB::enableQueryLog(); dd(\DB::getQueryLog());
   
    public function filterprint()
    {
        if(request('editcstatus')=='All') {
            $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')->GET();
        }
        else {
            request('fromdate') != '' && request('todate') !='' ?
            $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
            ->WHERE('T.CIVIL_STATUS',request('editcstatus'))
            ->WHEREBETWEEN('CREATED_AT', [request('fromdate'),request('todate')])
            ->GET()
            : $DisplayTable = \DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
            ->WHERE('T.CIVIL_STATUS', request('editcstatus'))
            ->GET();
        }
        
        $view = View('listofresidentsprintable', compact('DisplayTable'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view->render());
        return $pdf->stream();
       
    	
    }
}
