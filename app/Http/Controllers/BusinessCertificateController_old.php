<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessCertificateController extends Controller
{
	public function index($typeofview){

		$businessBusinessPermit = DB::table('t_business_information AS BUSINESS')
			->join('t_bf_business_permit AS BP', 'BP.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME'
				,'BUSINESS.BUSINESS_OR_NUMBER'
				,'BUSINESS.BUSINESS_ADDRESS'
			)
			->get();


		$businessBarangayClearance = DB::table('t_business_information AS BUSINESS')
			->join('t_bf_barangay_clearance AS BC', 'BC.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME'
				,'BUSINESS.BUSINESS_OR_NUMBER'
				,'BUSINESS.BUSINESS_ADDRESS'
			)
			->get();

		if($typeofview == "BarangayBusinessPermit")
			return view('certificateandforms.fm_bbp_001', compact('businessBusinessPermit'));
		if($typeofview == "BarangayClearanceBuilding")
			return view('certificateandforms.fm_bc_001a', compact('businessBarangayClearance'));
		if($typeofview == "BarangayClearanceBusiness")
			return view('certificateandforms.fm_bc_001b', compact('businessBarangayClearance'));
		if($typeofview == "BarangayClearanceZonal")
			return view('certificateandforms.fm_bc_001c', compact('businessBarangayClearance'));
		if($typeofview == "BarangayClearanceTricycle")
			return view('certificateandforms.fm_bc_001d', compact('businessBarangayClearance'));
		if($typeofview == "BarangayClearanceGeneralPurposes")
			return view('certificateandforms.fm_bc_001e', compact('businessBarangayClearance'));
	}


	public function Printfm_bbp_001(Request $request){
		$busines_permit_applicant_id = $request->busines_permit_applicant_id;

		$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 7
					,'BUSINESS_ID' => $busines_permit_applicant_id
					,'ISSUANCE_PURPOSE' => '$PURPOSE'
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => '0431-BP'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => 'Barangay Business Permit'
			));

		$controlno = DB::table('t_issuance')->select('ISSUANCE_ID')->latest('ISSUANCE_ID')->first();

		$specific_business =  DB::table('t_business_information AS BUSINESS')
			->join('t_issuance AS ISSUANCE', 'BUSINESS.BUSINESS_ID', 'ISSUANCE.BUSINESS_ID')
			->join('t_bf_business_permit AS BP', 'BP.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('t_bf_payment_details AS PAY', 'PAY.PAYMENT_DETAILS_ID', 'BP.PAYMENT_DETAILS_ID')
			->join('t_bf_main_lgu AS LGU', 'LGU.BF_MAIN_LGU_ID', 'BP.BF_MAIN_LGU_ID')
			->join('t_bf_business_activity AS BA', 'BA.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('r_bf_line_of_business AS LOB', 'LOB.LINE_OF_BUSINESS_ID', 'BA.LINE_OF_BUSINESS_ID')
			->where('BUSINESS.BUSINESS_ID', $busines_permit_applicant_id)
			->where('ISSUANCE.ISSUANCE_ID', $controlno->ISSUANCE_ID)
			->distinct()
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME'
				,'BUSINESS.BUSINESS_OR_NUMBER'
				,'BUSINESS.BUSINESS_ADDRESS'
				,'ISSUANCE.ISSUANCE_NUMBER'
				,'PAY.OR_NUMBER'
				,'PAY.OR_DATE'
				,'PAY.AMOUNT'
				,'LGU.CTC_AMOUNT'
				,'LGU.GROSS_SALES_TAX_AMOUNT'
				,'LGU.GARBAGE_CHARGE_AMOUNT'
				,'LGU.SIGNBOARD_RENEWAL_FEE_AMOUNT'
				,'LGU.PERMIT_FEE_AMOUNT'
				,'LOB.LINE_OF_BUSINESS_NAME'
			)->get();

		return response()->json(['specific_business' => $specific_business] );
	}


	public function Printfm_bc_001a(Request $request){
		$business_main_id = $request->business_main_id;

		$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 8
					,'BUSINESS_ID' => $business_main_id
					,'ISSUANCE_PURPOSE' => '$PURPOSE'
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => '0431-BCA'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => 'Barangay Clearance Building'
			));
		$controlno = DB::table('t_issuance')->select('ISSUANCE_ID')->latest('ISSUANCE_ID')->first();


		$specific_business = DB::table('t_business_information AS BUSINESS')
			->join('t_issuance AS ISSUANCE', 'BUSINESS.BUSINESS_ID', 'ISSUANCE.BUSINESS_ID')
			->join('t_bf_barangay_clearance AS BC', 'BC.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('t_bf_payment_details AS PAY', 'PAY.PAYMENT_DETAILS_ID', 'BC.PAYMENT_DETAILS_ID')
			->join('t_bf_main_lgu AS LGU', 'LGU.BF_MAIN_LGU_ID', 'BC.BF_MAIN_LGU_ID')
			->join('t_bf_scope_of_work AS SOW', 'SOW.SCOPE_OF_WORK_ID', 'BC.SCOPE_OF_WORK_ID')
			->join('t_bf_business_activity AS BA', 'BA.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('r_bf_line_of_business AS LOB', 'LOB.LINE_OF_BUSINESS_ID', 'BA.LINE_OF_BUSINESS_ID')
			->where('BUSINESS.BUSINESS_ID', $business_main_id)
			->where('ISSUANCE.ISSUANCE_ID', $controlno->ISSUANCE_ID)
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME' //COMPANY
				,'BUSINESS.BUSINESS_OR_NUMBER'
				// ,'BUSINESS.BUSINESS_OWNER' REPLACE 
				,'BUSINESS.BUSINESS_OWNER_FIRSTNAME'
				,'BUSINESS.BUSINESS_OWNER_MIDDLENAME'
				,'BUSINESS.BUSINESS_OWNER_LASTNAME'
				,'BUSINESS.BUSINESS_ADDRESS' //ADDRESS
				,'ISSUANCE.ISSUANCE_NUMBER'
				,'PAY.OR_NUMBER'
				,'PAY.OR_DATE'
				,'PAY.AMOUNT'
				,'LOB.LINE_OF_BUSINESS_NAME'
				,'SOW.SCOPE_OF_WORK_NAME'
				,'SOW.SCOPE_OF_WORK_SPECIFY'
				,'BC.CONSTRUCTION_ADDRESS'
			)->get();
		return response()->json(['specific_business' => $specific_business] );
	}

	
	public function Printfm_bc_001b(Request $request){
		$business_main_id = $request->business_main_id;

		$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 9
					,'BUSINESS_ID' => $business_main_id
					,'ISSUANCE_PURPOSE' => '$PURPOSE'
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => '0431-BCB'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => 'Barangay Clearance Business'
			));
		
		$controlno = DB::table('t_issuance')->select('ISSUANCE_ID')->latest('ISSUANCE_ID')->first();
		$specific_business = DB::table('t_business_information AS BUSINESS')
			->join('t_issuance AS ISSUANCE', 'BUSINESS.BUSINESS_ID', 'ISSUANCE.BUSINESS_ID')
			->join('t_bf_barangay_clearance AS BC', 'BC.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('t_bf_payment_details AS PAY', 'PAY.PAYMENT_DETAILS_ID', 'BC.PAYMENT_DETAILS_ID')
			->join('t_bf_main_lgu AS LGU', 'LGU.BF_MAIN_LGU_ID', 'BC.BF_MAIN_LGU_ID')
			// ->join('t_bf_scope_of_work AS SOW', 'SOW.SCOPE_OF_WORK_ID', 'BC.SCOPE_OF_WORK_ID')
			->join('t_bf_business_activity AS BA', 'BA.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('r_bf_line_of_business AS LOB', 'LOB.LINE_OF_BUSINESS_ID', 'BA.LINE_OF_BUSINESS_ID')
			->where('BUSINESS.BUSINESS_ID', $business_main_id)
			->where('ISSUANCE.ISSUANCE_ID', $controlno->ISSUANCE_ID)
			// ->distinct()
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME' //COMPANY
				,'BUSINESS.BUSINESS_OR_NUMBER'
				// ,'BUSINESS.BUSINESS_OWNER' REPLACE
				,'BUSINESS.BUSINESS_OWNER_FIRSTNAME'
				,'BUSINESS.BUSINESS_OWNER_MIDDLENAME'
				,'BUSINESS.BUSINESS_OWNER_LASTNAME'
				,'BUSINESS.BUSINESS_ADDRESS' //ADDRESS
				,'ISSUANCE.ISSUANCE_NUMBER'
				,'ISSUANCE.ISSUANCE_ID'
				,'PAY.OR_NUMBER'
				,'PAY.OR_DATE'
				,'PAY.AMOUNT'
				,'LOB.LINE_OF_BUSINESS_NAME'
				,'BC.CONSTRUCTION_ADDRESS'
			)->get();


		return response()->json(['specific_business' => $specific_business] );
	}


	public function Printfm_bc_001c(Request $request){
		$business_main_id = $request->business_main_id;

		$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 10
					,'BUSINESS_ID' => $business_main_id
					,'ISSUANCE_PURPOSE' => '$PURPOSE'
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => '0923-BCC'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => 'Barangay Clearance Zonal'
			));

		$controlno = DB::table('t_issuance')->select('ISSUANCE_ID')->latest('ISSUANCE_ID')->first();
			$specific_business = DB::table('t_business_information AS BUSINESS')
			->join('t_issuance AS ISSUANCE', 'BUSINESS.BUSINESS_ID', 'ISSUANCE.BUSINESS_ID')
			->join('t_bf_barangay_clearance AS BC', 'BC.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('t_bf_payment_details AS PAY', 'PAY.PAYMENT_DETAILS_ID', 'BC.PAYMENT_DETAILS_ID')
			->join('t_bf_main_lgu AS LGU', 'LGU.BF_MAIN_LGU_ID', 'BC.BF_MAIN_LGU_ID')
			->join('t_bf_business_activity AS BA', 'BA.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('r_bf_line_of_business AS LOB', 'LOB.LINE_OF_BUSINESS_ID', 'BA.LINE_OF_BUSINESS_ID')
			->join('t_bf_scope_of_work AS SOW', 'SOW.SCOPE_OF_WORK_ID', 'BC.SCOPE_OF_WORK_ID')
			->where('BUSINESS.BUSINESS_ID', $business_main_id)
			->where('ISSUANCE.ISSUANCE_ID', $controlno->ISSUANCE_ID)
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME' //COMPANY
				,'BUSINESS.BUSINESS_OR_NUMBER'
				// ,'BUSINESS.BUSINESS_OWNER' REPLACE
				,'BUSINESS.BUSINESS_OWNER_FIRSTNAME'
				,'BUSINESS.BUSINESS_OWNER_MIDDLENAME'
				,'BUSINESS.BUSINESS_OWNER_LASTNAME'
				,'BUSINESS.BUSINESS_ADDRESS' //ADDRESS
				// ,'BUSINESS.BUSI'
				,'ISSUANCE.ISSUANCE_NUMBER'
				,'PAY.OR_NUMBER'
				,'PAY.OR_DATE'
				,'PAY.AMOUNT'
				,'LOB.LINE_OF_BUSINESS_NAME'
				,'BC.CONSTRUCTION_ADDRESS'
				,'BUSINESS.BUSINESS_AREA'
				,'SOW.SCOPE_OF_WORK_NAME'
				,'SOW.SCOPE_OF_WORK_SPECIFY'
				,'LGU.ORIGINAL_TRANSFER_CERTIFICATE_AGENCY'
				,'LGU.TAX_DECLARATION_AGENCY'
			)->get();

		return response()->json(['specific_business' => $specific_business] );
	}


	public function Printfm_bc_001d(Request $request){
		$business_main_id = $request->business_main_id;

		$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 11
					,'BUSINESS_ID' => $business_main_id
					,'ISSUANCE_PURPOSE' => '$PURPOSE'
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => '0923-BCD'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => 'Barangay Clearance Tricycle'
			));

		$controlno = DB::table('t_issuance')->select('ISSUANCE_ID')->latest('ISSUANCE_ID')->first();
		$specific_business = DB::table('t_business_information AS BUSINESS')
			->join('t_issuance AS ISSUANCE', 'BUSINESS.BUSINESS_ID', 'ISSUANCE.BUSINESS_ID')
			->join('t_bf_barangay_clearance AS BC', 'BC.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('t_bf_payment_details AS PAY', 'PAY.PAYMENT_DETAILS_ID', 'BC.PAYMENT_DETAILS_ID')
			->join('t_bf_main_lgu AS LGU', 'LGU.BF_MAIN_LGU_ID', 'BC.BF_MAIN_LGU_ID')
			->join('t_bf_business_activity AS BA', 'BA.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('r_bf_line_of_business AS LOB', 'LOB.LINE_OF_BUSINESS_ID', 'BA.LINE_OF_BUSINESS_ID')
			->join('t_bf_scope_of_work AS SOW', 'SOW.SCOPE_OF_WORK_ID', 'BC.SCOPE_OF_WORK_ID')
			->where('BUSINESS.BUSINESS_ID', $business_main_id)
			->where('ISSUANCE.ISSUANCE_ID', $controlno->ISSUANCE_ID)
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME' //COMPANY
				,'BUSINESS.BUSINESS_OR_NUMBER'
				// ,'BUSINESS.BUSINESS_OWNER' // REPLACE
				,'BUSINESS.BUSINESS_OWNER_FIRSTNAME'
				,'BUSINESS.BUSINESS_OWNER_MIDDLENAME'
				,'BUSINESS.BUSINESS_OWNER_LASTNAME'
				,'BUSINESS.BUSINESS_ADDRESS' //ADDRESS
				,'ISSUANCE.ISSUANCE_NUMBER'
				,'PAY.OR_NUMBER'
				,'PAY.OR_DATE'
				,'PAY.AMOUNT'
				,'LOB.LINE_OF_BUSINESS_NAME'
				,'BC.CONSTRUCTION_ADDRESS'
				,'BUSINESS.BUSINESS_AREA'
				,'SOW.SCOPE_OF_WORK_NAME'
				,'SOW.SCOPE_OF_WORK_SPECIFY'
				,'LGU.OR_OF_TRICYCLE_AGENCY'
				,'LGU.TAX_DECLARATION_AGENCY'
			)->get();

		return response()->json(['specific_business' => $specific_business] );
	}


	public function Printfm_bc_001e(Request $request){
		$business_main_id = $request->business_main_id;

		$insert = DB::table('t_issuance')
				->insert(array(
					'ISSUANCE_TYPE_ID' => 12
					,'BUSINESS_ID' => $business_main_id
					,'ISSUANCE_PURPOSE' => '$PURPOSE'
					,'ISSUANCE_DATE' => date('Y-m-d')
					,'ISSUANCE_NUMBER' => '0892-BCE'
					,'RECEIVED_BY' => "Shiela Mae Velga"
					,'STATUS' => "Issued"
					,'REMARKS' => 'Barangay Clearance General Purposes'
			));

		$controlno = DB::table('t_issuance')->select('ISSUANCE_ID')->latest('ISSUANCE_ID')->first();
		$specific_business = DB::table('t_business_information AS BUSINESS')
			->join('t_issuance AS ISSUANCE', 'BUSINESS.BUSINESS_ID', 'ISSUANCE.BUSINESS_ID')
			->join('t_bf_barangay_clearance AS BC', 'BC.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('t_bf_payment_details AS PAY', 'PAY.PAYMENT_DETAILS_ID', 'BC.PAYMENT_DETAILS_ID')
			->join('t_bf_main_lgu AS LGU', 'LGU.BF_MAIN_LGU_ID', 'BC.BF_MAIN_LGU_ID')
			->join('t_bf_business_activity AS BA', 'BA.BUSINESS_ID', 'BUSINESS.BUSINESS_ID')
			->join('r_bf_line_of_business AS LOB', 'LOB.LINE_OF_BUSINESS_ID', 'BA.LINE_OF_BUSINESS_ID')
			->join('t_bf_scope_of_work AS SOW', 'SOW.SCOPE_OF_WORK_ID', 'BC.SCOPE_OF_WORK_ID')
			->where('BUSINESS.BUSINESS_ID', $business_main_id)
			->where('ISSUANCE.ISSUANCE_ID', $controlno->ISSUANCE_ID)
			->select(
				'BUSINESS.BUSINESS_ID'
				,'BUSINESS.BUSINESS_NAME'
				,'BUSINESS.TRADE_NAME' //COMPANY
				,'BUSINESS.BUSINESS_OR_NUMBER'
				// ,'BUSINESS.BUSINESS_OWNER' //REPLACE
				,'BUSINESS.BUSINESS_OWNER_FIRSTNAME'
				,'BUSINESS.BUSINESS_OWNER_MIDDLENAME'
				,'BUSINESS.BUSINESS_OWNER_LASTNAME'
				,'BUSINESS.BUSINESS_ADDRESS' //ADDRESS
				,'ISSUANCE.ISSUANCE_NUMBER'
				,'PAY.OR_NUMBER'
				,'PAY.OR_DATE'
				,'PAY.AMOUNT'
				,'LOB.LINE_OF_BUSINESS_NAME'
				,'BC.CONSTRUCTION_ADDRESS'
				,'BUSINESS.BUSINESS_AREA'
				,'SOW.SCOPE_OF_WORK_NAME'
				,'SOW.SCOPE_OF_WORK_SPECIFY'
				,'LGU.OR_OF_TRICYCLE_AGENCY'
				,'LGU.TAX_DECLARATION_AGENCY'
			)->get();

		return response()->json(['specific_business' => $specific_business] );
	}


}

