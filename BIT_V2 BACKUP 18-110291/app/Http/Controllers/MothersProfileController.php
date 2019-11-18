<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class MothersProfileController extends Controller
{
    public function index() 
    {

        $MotherTable = DB::TABLE('T_MOTHERS_PROFILE AS M')
                        ->JOIN('T_RESIDENT_BASIC_INFO AS T','M.RESIDENT_ID','T.RESIDENT_ID')
                        ->WHERE('T.SEX', 'Female')
                        ->SELECT(
                                    'M.MOTHERS_ID','M.IS_PREGNANT','M.MOTHER_MOTHER_TONGUE',
                                    'M.MOTHER_OTHER_DIALECTS','M.MOTHER_EDUCATIONAL_ATTAINMENT',
                                    'T.LASTNAME','T.FIRSTNAME','T.MIDDLENAME','T.ACTIVE_FLAG'
                                )
                        ->GET();

        // $MotherTable = COLLECT(DB::SELECT("SELECT M.MOTHERS_ID, M.IS_PREGNANT, M.MOTHER_MOTHER_TONGUE, M.MOTHER_OTHER_DIALECTS,
        //                 M.MOTHER_EDUCATIONAL_ATTAINMENT, T.LASTNAME, T.FIRSTNAME, T.MIDDLENAME, T.ACTIVE_FLAG
        //                 FROM T_MOTHERS_PROFILE AS M INNER JOIN T_RESIDENT_BASIC_INFO AS T ON M.RESIDENT_ID = T.RESIDENT_ID
        //                 WHERE T.SEX = 'Female' AND (YEAR(CURDATE())-YEAR(T.DATE_OF_BIRTH)) BETWEEN 1 AND 13"));

        //dd($MotherTable);
    	return view('resident.mothersprofile', compact('MotherTable'));
      
    }

    public function loadresident()
    {
         $display_data = DB::TABLE('T_RESIDENT_BASIC_INFO AS T')
         ->WHERE('T.SEX','Female')
            ->whereNotIn('T.RESIDENT_ID',DB::TABLE('T_FATHERS_PROFILE')->SELECT('RESIDENT_ID'))
            ->whereNotIn('T.RESIDENT_ID',DB::TABLE('T_MOTHERS_PROFILE')->SELECT('RESIDENT_ID'))
            ->whereBetween(DB::raw('(YEAR(CURDATE())-YEAR(DATE_OF_BIRTH))'),[9,99])
            ->SELECT('T.RESIDENT_ID','T.LASTNAME','T.FIRSTNAME','T.MIDDLENAME','T.QUALIFIER','T.SEX','T.DATE_OF_BIRTH','T.CIVIL_STATUS','T.OCCUPATION','T.WORK_STATUS'); 

        return datatables()->of($display_data)->addIndexColumn()->make(true);
    }

    public function store(Request $request)
    {
    	DB::TABLE('T_MOTHERS_PROFILE')
    	->INSERT(
            [

                'IS_PREGNANT' => request('is_pregnant'),
                'MOTHER_MOTHER_TONGUE' => request('m_tongue'),
                'MOTHER_OTHER_DIALECTS' => request('other_dialect'),
                'MOTHER_EDUCATIONAL_ATTAINMENT' => request('m_educattain'),
                'RESIDENT_ID' => request('resident_id'),
                'CREATED_AT' => Carbon::now(),
            ]
    	);
    	echo "good";
    }


    public function edit()
    {
    	DB::TABLE('T_MOTHERS_PROFILE')
        ->WHERE('MOTHERS_ID',request('mother_id'))
        ->UPDATE
        (
           [

                'IS_PREGNANT' => request('is_pregnant'),
                'MOTHER_MOTHER_TONGUE' => request('m_tongue'),
                'MOTHER_OTHER_DIALECTS' => request('other_dialect'),
                'MOTHER_EDUCATIONAL_ATTAINMENT' => request('m_educattain'),
                'UPDATED_AT' => Carbon::now(),
            ]
        );
        echo "good";
    }
}
