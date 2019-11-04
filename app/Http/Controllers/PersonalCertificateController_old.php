<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PersonalCertificateController extends Controller
{
    public function index() 
    {
		$resident = DB::table('t_resident_basic_info')
			->select(
				'RESIDENT_ID'
				,'LASTNAME'
				,'MIDDLENAME'
				,'FIRSTNAME'
				,'SEX'
				,'ADDRESS_UNIT_NO'
				,'ADDRESS_PHASE'
				,'ADDRESS_BLOCK_NO'
				,'ADDRESS_HOUSE_NO'
				,'ADDRESS_STREET'
				,'ADDRESS_SUBDIVISION'
				,'ADDRESS_BUILDING'
			)
			->get();


		$controlno = DB::table('t_issuance')
			->select('ISSUANCE_NUMBER','ISSUANCE_ID')
			->latest('ISSUANCE_ID')
			->first();
		

		//return view('certificateandforms.personal', compact('resident'));
    }

    public function PersonalPrintableData(Request $request) 
    {
    	
    	$RESIDENT_ID = $request->RESIDENT_ID;
    	$ISSUANCE_TYPE = $request->ISSUANCE_TYPE;
    	$PURPOSE = $request->PURPOSE;

    	$specific_person = DB::table('t_resident_basic_info')
    		->where('RESIDENT_ID', $RESIDENT_ID)
			->select(
				'RESIDENT_ID'
				,'LASTNAME'
				,'MIDDLENAME'
				,'FIRSTNAME'
				,'SEX'
				,'ADDRESS_UNIT_NO'
				,'ADDRESS_PHASE'
				,'ADDRESS_BLOCK_NO'
				,'ADDRESS_HOUSE_NO'
				,'ADDRESS_STREET'
				,'ADDRESS_SUBDIVISION'
				,'ADDRESS_BUILDING'
				,'CIVIL_STATUS'
				,'GSIS_NO'
				,'SSS_NO'
				,'SEX'
				,'DATE_OF_BIRTH'
			)
			->get();

		$controlno = DB::table('t_issuance')
			->select('ISSUANCE_NUMBER')
			->latest('ISSUANCE_ID')
			->first();



    	foreach($specific_person as $row)
    		$REMARKS = $row->FIRSTNAME.' '.$row->LASTNAME. ' requested '.$ISSUANCE_TYPE.' for '.$PURPOSE;
    	
			
		if($ISSUANCE_TYPE == "Barangay Certificate Residency"){	
			$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 13
					,'RESIDENT_ID' => $RESIDENT_ID
					,'ISSUANCE_PURPOSE' => $PURPOSE
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => 'CTRL-0003'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => $REMARKS
			));
		}

		else if($ISSUANCE_TYPE == "Barangay Certificate Calamity Loan SSS-GSIS"){	
			$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 14
					,'RESIDENT_ID' => $RESIDENT_ID
					,'ISSUANCE_PURPOSE' => $PURPOSE
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => 'CTRL-0003'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => $REMARKS
			));
		}

		else if($ISSUANCE_TYPE == "Barangay Certificate Calamity Loan OFW"){	
			$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 15
					,'RESIDENT_ID' => $RESIDENT_ID
					,'ISSUANCE_PURPOSE' => $PURPOSE
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => 'CTRL-0003'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => $REMARKS
			));
		}

		else if($ISSUANCE_TYPE == "Barangay Certificate SPES"){	
			$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 16
					,'RESIDENT_ID' => $RESIDENT_ID
					,'ISSUANCE_PURPOSE' => $PURPOSE
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => 'CTRL-0003'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => $REMARKS
			));
		}

		else if($ISSUANCE_TYPE == "Barangay Certificate Solo Parent"){	
			$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 17
					,'RESIDENT_ID' => $RESIDENT_ID
					,'ISSUANCE_PURPOSE' => $PURPOSE
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => 'CTRL-0003'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => $REMARKS
			));
		}

		else if($ISSUANCE_TYPE == "Barangay Certificate Indigency"){	
			$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 18
					,'RESIDENT_ID' => $RESIDENT_ID
					,'ISSUANCE_PURPOSE' => $PURPOSE
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => 'CTRL-0003'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => $REMARKS
			));
		}


		return response()->json(['specific_person' => $specific_person, 'message' => $controlno]);
    }


   
}
