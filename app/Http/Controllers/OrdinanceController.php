<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdinanceController extends Controller
{
    //
    public function index()
    {
        $barangay_id = session('session_brgy_id');

        $ordinances = COLLECT(\DB::SELECT("SELECT O.ORDINANCE_ID, CONCAT(RBI.LASTNAME,' ', RBI.FIRSTNAME, ' ', RBI.MIDDLENAME) AS FULLNAME,
                                            O.ORDINANCE_AUTHOR, O.ORDINANCE_TITLE, OC.ORDINANCE_CATEGORY_NAME, O.ORDINANCE_SANCTION, O.ORDINANCE_REMARKS, O.FILE_NAME,   O.ORDINANCE_DESCRIPTION, O.ACTIVE_FLAG
                                            FROM T_ORDINANCE AS O
                                            INNER JOIN T_BARANGAY_OFFICIAL BO ON O.BARANGAY_OFFICIAL_ID = BO.BARANGAY_OFFICIAL_ID
                                            INNER JOIN T_RESIDENT_BASIC_INFO RBI ON BO.RESIDENT_ID = RBI.RESIDENT_ID
                                            INNER JOIN R_ORDINANCE_CATEGORY OC ON O.ORDINANCE_CATEGORY_ID = OC.ORDINANCE_CATEGORY_ID"));

        $category = \DB::TABLE('R_ORDINANCE_CATEGORY')
                    ->PLUCK('ORDINANCE_CATEGORY_NAME','ORDINANCE_CATEGORY_ID');

        $assign_official = COLLECT(\DB::SELECT("SELECT BO.BARANGAY_OFFICIAL_ID, CONCAT(RBI.LASTNAME,' ', RBI.FIRSTNAME, ' ', RBI.MIDDLENAME) AS FULLNAME
                            FROM T_BARANGAY_OFFICIAL BO
                            INNER JOIN T_RESIDENT_BASIC_INFO RBI ON BO.RESIDENT_ID = RBI.RESIDENT_ID
                            WHERE BO.BARANGAY_ID = '$barangay_id'"));
                


         //dd($barangay_id);            
        return view('ordinance.ordinance', compact('ordinances','category','assign_official'));

    }

    public function store()
    {

        $ordinance_file = request()->file('file');
            \DB::TABLE('T_ORDINANCE')
            ->INSERT(
                [
                    'ORDINANCE_TITLE'      => request('title'),
                    'ORDINANCE_DESCRIPTION'=> request('description'),
                    'ORDINANCE_AUTHOR'     => request('author'),
                    'ORDINANCE_SANCTION'   => request('santion'),

                    'ORDINANCE_REMARKS'    => request('remarks'),
                    'ORDINANCE_CATEGORY_ID'         => request('category'),
                    'BARANGAY_OFFICIAL_ID' => request('assignoff'),
                    "FILE_NAME" => $ordinance_file->getClientOriginalName(),
                    'ACTIVE_FLAG' => 1
                ]
            );
            $ordinance_file->move(public_path('ordinances'), $ordinance_file->getClientOriginalName());
            echo "good";
    }



    public function update()
    {

        $ordinance_id = request('ordinance_id');
            \DB::TABLE('T_ORDINANCE')
            ->where('ORDINANCE_ID',$ordinance_id)
            ->update(
                [
                    'ORDINANCE_TITLE'      => request('title'),
                    'ORDINANCE_DESCRIPTION'=> request('description'),
                    'ORDINANCE_AUTHOR'     => request('author'),
                    'ORDINANCE_SANCTION'   => request('santion'),

                    'ORDINANCE_REMARKS'    => request('remarks'),
                    'ORDINANCE_CATEGORY_ID'=> request('category'),
                    'BARANGAY_OFFICIAL_ID' => request('assignoff'),                                    
                ]
            );            
            echo "good";
    }
}
