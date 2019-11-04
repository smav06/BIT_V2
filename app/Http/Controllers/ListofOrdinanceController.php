<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListofOrdinanceController extends Controller
{
    public function index()
    {
    	$ordinances = $this->getordinances();
    	 $category = \DB::TABLE('R_ORDINANCE_CATEGORY')
                    ->PLUCK('ORDINANCE_CATEGORY_NAME','ORDINANCE_CATEGORY_ID');

    	return view('queriesreports.listofordinance',compact('ordinances','category'));
    }

    public function getordinances()
    {
    	return $ordinances = COLLECT(\DB::SELECT("SELECT O.ORDINANCE_ID, CONCAT(RBI.LASTNAME,' ', RBI.FIRSTNAME, ' ', RBI.MIDDLENAME) AS FULLNAME,
                                            O.ORDINANCE_AUTHOR, O.ORDINANCE_TITLE, OC.ORDINANCE_CATEGORY_NAME, O.ORDINANCE_SANCTION, O.ORDINANCE_REMARKS, O.ACTIVE_FLAG
                                            FROM T_ORDINANCE AS O
                                            INNER JOIN T_BARANGAY_OFFICIAL BO ON O.BARANGAY_OFFICIAL_ID = BO.BARANGAY_OFFICIAL_ID
                                            INNER JOIN T_RESIDENT_BASIC_INFO RBI ON BO.RESIDENT_ID = RBI.RESIDENT_ID
                                            INNER JOIN R_ORDINANCE_CATEGORY OC ON O.ORDINANCE_CATEGORY_ID = OC.ORDINANCE_CATEGORY_ID"));
    }

    public function getfilter($data,$fromdate,$todate)
    {   
        $fromdate != '' && $todate != '' ?        
        $DisplayTable = COLLECT(\DB::SELECT("SELECT O.ORDINANCE_ID, CONCAT(RBI.LASTNAME,' ', RBI.FIRSTNAME, ' ', RBI.MIDDLENAME) AS FULLNAME,
                                            O.ORDINANCE_AUTHOR, O.ORDINANCE_TITLE, OC.ORDINANCE_CATEGORY_NAME, O.ORDINANCE_SANCTION, O.ORDINANCE_REMARKS, O.ACTIVE_FLAG
                                            FROM T_ORDINANCE AS O
                                            INNER JOIN T_BARANGAY_OFFICIAL BO ON O.BARANGAY_OFFICIAL_ID = BO.BARANGAY_OFFICIAL_ID
                                            INNER JOIN T_RESIDENT_BASIC_INFO RBI ON BO.RESIDENT_ID = RBI.RESIDENT_ID
                                            INNER JOIN R_ORDINANCE_CATEGORY OC ON O.ORDINANCE_CATEGORY_ID = OC.ORDINANCE_CATEGORY_ID
                                            WHERE OC.ORDINANCE_CATEGORY_NAME = '$data'
                                            AND O.CREATED_AT BETWEEN '$fromdate' AND '$todate'
                                            "))
        :
        $DisplayTable = COLLECT(\DB::SELECT("SELECT O.ORDINANCE_ID, CONCAT(RBI.LASTNAME,' ', RBI.FIRSTNAME, ' ', RBI.MIDDLENAME) AS FULLNAME,
                                            O.ORDINANCE_AUTHOR, O.ORDINANCE_TITLE, OC.ORDINANCE_CATEGORY_NAME, O.ORDINANCE_SANCTION, O.ORDINANCE_REMARKS, O.ACTIVE_FLAG
                                            FROM T_ORDINANCE AS O
                                            INNER JOIN T_BARANGAY_OFFICIAL BO ON O.BARANGAY_OFFICIAL_ID = BO.BARANGAY_OFFICIAL_ID
                                            INNER JOIN T_RESIDENT_BASIC_INFO RBI ON BO.RESIDENT_ID = RBI.RESIDENT_ID
                                            INNER JOIN R_ORDINANCE_CATEGORY OC ON O.ORDINANCE_CATEGORY_ID = OC.ORDINANCE_CATEGORY_ID
                                            WHERE OC.ORDINANCE_CATEGORY_NAME = '$data'                                            
                                            "));
        
        
        return $DisplayTable;
                                        
    } 
   
    public function filterdisplay()
    {
        $data = request('editcstatus');
        $fromdate = request('fromdate');
        $todate = request('todate');
    	$data == 'All'? $response = response()->json($this->getordinances())
        : $response = response()->json($this->getfilter($data, $fromdate, $todate));
    	return $response;
    }

    public function getdata($data)
    {
    	if ($data != 'All')
    	{
    		$DisplayTable = $this->getfilter($data);
    	}
    	else
    	{
    		$DisplayTable = $this->getordinances();
    	}
		return $DisplayTable;

    }

    public function filterprint()
    {
        $data = request('editcstatus');
        $DisplayTable = $this->getdata($data);
        $view = View('lisofordinancesprintable', compact('DisplayTable'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view->render());
        return $pdf->stream();

    }
   

}
