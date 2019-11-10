<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    public function index($typeofview){

        $approved_business = DB::table('v_approved_business')->get();
        $business_nature = DB::table('v_business_nature')->get();
        $line_of_business = DB::table('v_line_of_business')->get();
        $businessNotApproved = DB::table('v_declined_business')->get();
        $pending_application_form = DB::table('v_pending_application_form')->get();
        $approved_application_form = DB::table('v_approved_application_form')->get();
        $declined_application_form = DB::table('v_declined_application_form')->get();

        // dd($line_of_business);

        if($typeofview == "BusinessRegistration")
            return view('business.business_registration', compact('approved_business', 'business_nature', 'line_of_business'));
        else if($typeofview == "BusinessApproval")
            return view('business.business_approval', compact('businessNotApproved'));
         else if($typeofview == "BusinessIssuance")
            return view('business.business_issuance', compact('approved_business', 'business_nature'));
        else if($typeofview == "IssuanceEvaluation")
            return view('business.issuance_evaluation', compact('pending_application_form', 'approved_application_form', 'declined_application_form'));


    }

    public function IssuanceEvaluation(Request $request){
        $OR_NO = $request->OR_NO;
        $OR_DATE = $request->OR_DATE;
        $OR_AMOUNT = $request->OR_AMOUNT;
        $FORM_ID = $request->FORM_ID;
        $PAPER_TYPE_ID = $request->PAPER_TYPE_ID;
        $EVALUATED_BY = $request->EVALUATED_BY;
        $EVALUATION_STATUS = $request->EVALUATION_STATUS;
        $REMARKS = $request->REMARKS;
        $BUSINESS_ID = $request->BUSINESS_ID;

        $ap_evaluation = DB::table('t_application_form_evaluation')
            ->insert(array(
                'FORM_ID' => $FORM_ID
                ,'EVALUATED_BY' => $EVALUATED_BY
                ,'EVALUATION_STATUS' => $EVALUATION_STATUS
                ,'DATE_EVALUATED' => date('Y-m-d')
                ,'REMARKS' => $REMARKS
            ));

        $application_form = DB::table('t_application_form')
            ->where('FORM_ID', $FORM_ID)
            ->update(array(
                'STATUS' => $EVALUATION_STATUS
            ));
        if($EVALUATION_STATUS == "Approved"){
            $clearance_certification = DB::table('t_clearance_certification')
                ->insert(array(
                    'CONTROL_NO' => 'XXXX-XXX'
                    ,'ISSUED_DATE' => date('Y-m-d')
                    ,'OR_NO' => $OR_NO
                    ,'OR_DATE' => $OR_DATE
                    ,'OR_AMOUNT' => $OR_AMOUNT
                    ,'FORM_ID' => $FORM_ID
                    ,'PAPER_TYPE_ID' => $PAPER_TYPE_ID
                ));
        }

    }

    public function BusinessIssuanceRequest(Request $request){
        // Business Permit
            $TAX_YEAR = $request->TAX_YEAR;
            $QUARTER = $request->QUARTER;
            $BARANGAY_PERMIT = $request->BARANGAY_PERMIT;
            $GARBAGE_FEE = $request->GARBAGE_FEE;
            $SIGNBOARD = $request->SIGNBOARD;
            $CTC = $request->CTC;
            $BUSINESS_TAX = $request->BUSINESS_TAX;
        // Clearance Building - A
            $A_APPLICANT_NAME = $request->A_APPLICANT_NAME;
            $A_CONSTRUCTION_ADDRESS = $request->A_CONSTRUCTION_ADDRESS;
            $A_SCOPE_OF_WORK_NAME = $request->A_SCOPE_OF_WORK_NAME;
            $A_SCOPE_OF_WORK_SPECIFY = $request->A_SCOPE_OF_WORK_SPECIFY;
            $A_PROJECT_LOCATION = $request->A_PROJECT_LOCATION;
        // Clearance Business - B
            $B_REGISTERED_NAME = $request->B_REGISTERED_NAME;
            $B_CONSTRUCTION_ADDRESS = $request->B_CONSTRUCTION_ADDRESS;
        //Clearance Zonal - C
            $C_OCT_TCT_NUMBER = $request->C_OCT_TCT_NUMBER;
            $C_TAX_DECLARATION = $request->C_TAX_DECLARATION;
            $C_BUSINESS_AREA = $request->C_BUSINESS_AREA;
            $C_AREA_CLASSIFICATION = $request->C_AREA_CLASSIFICATION;
            $C_PROJECT_LOCATION = $request->C_PROJECT_LOCATION;
            $C_PURPOSE = $request->C_PURPOSE;
            $C_APPLICANT_NAME = $request->C_APPLICANT_NAME;
            $C_CONSTRUCTION_ADDRESS = $request->C_CONSTRUCTION_ADDRESS;
        //Clearance Tricycle - D
            $D_APPLICANT_NAME = $request->D_APPLICANT_NAME;
            $D_REGISTERED_NAME = $request->D_REGISTERED_NAME;
            $D_CONSTRUCTION_ADDRESS = $request->D_CONSTRUCTION_ADDRESS;
            $D_DRIVER_LICENSE_NO = $request->D_DRIVER_LICENSE_NO;
            $D_MUDGUARD_NO = $request->D_MUDGUARD_NO;
            $D_CR_NO = $request->D_CR_NO;
            $D_OR_NO = $request->D_OR_NO;
        //Clearance General Purpose - E
            $E_PURPOSE = $request->E_PURPOSE;
            $E_REGISTERED_NAME = $request->E_REGISTERED_NAME;
            $E_CONSTRUCTION_ADDRESS = $request->E_CONSTRUCTION_ADDRESS;
        //General
            $PAPER_TYPE_CLEARANCE = $request->PAPER_TYPE_CLEARANCE;
            $PAPER_TYPE_FORM = $request->PAPER_TYPE_FORM;
            $BUSINESS_ID = $request->BUSINESS_ID;

        $clearance_type_id = DB::table('r_paper_type')
            ->where('PAPER_TYPE_NAME', $PAPER_TYPE_CLEARANCE)
            ->select('PAPER_TYPE_ID')
            ->first();
        $form_type_id = DB::table('r_paper_type')
            ->where('PAPER_TYPE_NAME', $PAPER_TYPE_FORM)
            ->select('PAPER_TYPE_ID')
            ->first();

        if($PAPER_TYPE_CLEARANCE == "Barangay Business Permit"){
            $application_form = DB::Table('t_application_form')
                ->insert(array(
                    'FORM_NUMBER' => 'XXXX-XXX'
                    ,'PAPER_TYPE_ID' => $form_type_id->PAPER_TYPE_ID
                    ,'STATUS' => 'Pending'
                    ,'BUSINESS_ID' => $BUSINESS_ID
                    ,'RECEIVED_BY' => 'Shiela Mae A. Velga'
                    ,'REQUESTED_PAPER_TYPE_ID' => $clearance_type_id->PAPER_TYPE_ID
                ));

            $latest_form_id = DB::table('t_application_form')->select('FORM_ID')->latest('FORM_ID')->first();

            $business_permit = DB::table('t_bf_business_permit')
                ->insert(array(
                    'TAX_YEAR' => $TAX_YEAR
                    ,'QUARTER' => $QUARTER
                    ,'BARANGAY_PERMIT' => $BARANGAY_PERMIT
                    ,'GARBAGE_FEE' => $GARBAGE_FEE
                    ,'SIGNBOARD' => $SIGNBOARD
                    ,'CTC' => $CTC
                    ,'BUSINESS_TAX' => $BUSINESS_TAX
                    ,'FORM_ID' => $latest_form_id->FORM_ID
                ));

            return response()->json(['message' => $latest_form_id] );
        }
        else if ($PAPER_TYPE_CLEARANCE == "Barangay Clearance Building"){
         $application_form = DB::Table('t_application_form')
            ->insert(array(
                'FORM_NUMBER' => 'XXXX-XXX'
                ,'PAPER_TYPE_ID' => $form_type_id->PAPER_TYPE_ID
                ,'STATUS' => 'Pending'
                ,'BUSINESS_ID' => $BUSINESS_ID
                ,'RECEIVED_BY' => 'Shiela Mae A. Velga'
                ,'REQUESTED_PAPER_TYPE_ID' => $clearance_type_id->PAPER_TYPE_ID
            ));

            $latest_form_id = DB::table('t_application_form')->select('FORM_ID')->latest('FORM_ID')->first();

            $scope_of_work = DB::table('t_bf_scope_of_work')
                ->insert(array(
                    'SCOPE_OF_WORK_NAME' => $A_SCOPE_OF_WORK_NAME
                    ,'SCOPE_OF_WORK_SPECIFY' =>$A_SCOPE_OF_WORK_SPECIFY
                ));
            $latest_scope_of_work_id = DB::table('t_bf_scope_of_work')->select('SCOPE_OF_WORK_ID')->latest('SCOPE_OF_WORK_ID')->first();

            $barangay_clearance = DB::table('t_bf_barangay_clearance')
                ->insert(array(
                    'APPLICANT_NAME' => $A_APPLICANT_NAME
                    ,'CONSTRUCTION_ADDRESS' => $A_CONSTRUCTION_ADDRESS
                    ,'PROJECT_LOCATION' => $A_PROJECT_LOCATION
                    ,'SCOPE_OF_WORK_ID' => $latest_scope_of_work_id->SCOPE_OF_WORK_ID
                    ,'FORM_ID' => $latest_form_id->FORM_ID
                ));

            return response()->json(['message' => $latest_form_id] );
        }
        else if($PAPER_TYPE_CLEARANCE == "Barangay Clearance Business"){
            $application_form = DB::Table('t_application_form')
                ->insert(array(
                    'FORM_NUMBER' => 'XXXX-XXX'
                    ,'PAPER_TYPE_ID' => $form_type_id->PAPER_TYPE_ID
                    ,'STATUS' => 'Pending'
                    ,'BUSINESS_ID' => $BUSINESS_ID
                    ,'RECEIVED_BY' => 'Shiela Mae A. Velga'
                    ,'REQUESTED_PAPER_TYPE_ID' => $clearance_type_id->PAPER_TYPE_ID
                ));

            $latest_form_id = DB::table('t_application_form')->select('FORM_ID')->latest('FORM_ID')->first();

           $barangay_clearance = DB::table('t_bf_barangay_clearance')
                ->insert(array(
                    'REGISTERED_NAME' => $B_REGISTERED_NAME
                    ,'CONSTRUCTION_ADDRESS' => $B_CONSTRUCTION_ADDRESS
                    ,'FORM_ID' => $latest_form_id->FORM_ID
                ));

            return response()->json(['message' => $latest_form_id] );
        }
        else if($PAPER_TYPE_CLEARANCE == "Barangay Clearance Zonal"){
            $application_form = DB::Table('t_application_form')
                ->insert(array(
                    'FORM_NUMBER' => 'XXXX-XXX'
                    ,'PAPER_TYPE_ID' => $form_type_id->PAPER_TYPE_ID
                    ,'STATUS' => 'Pending'
                    ,'BUSINESS_ID' => $BUSINESS_ID
                    ,'RECEIVED_BY' => 'Shiela Mae A. Velga'
                    ,'REQUESTED_PAPER_TYPE_ID' => $clearance_type_id->PAPER_TYPE_ID
                ));

            $latest_form_id = DB::table('t_application_form')->select('FORM_ID')->latest('FORM_ID')->first();

           $barangay_clearance = DB::table('t_bf_barangay_clearance')
                ->insert(array(
                    'OCT_TCT_NUMBER' => $C_OCT_TCT_NUMBER
                    ,'TAX_DECLARATION' => $C_TAX_DECLARATION
                    ,'BUSINESS_AREA' => $C_BUSINESS_AREA
                    ,'AREA_CLASSIFICATION' => $C_AREA_CLASSIFICATION
                    ,'PURPOSE' => $C_PURPOSE
                    ,'APPLICANT_NAME' => $C_APPLICANT_NAME
                    ,'CONSTRUCTION_ADDRESS' => $C_CONSTRUCTION_ADDRESS
                    ,'PROJECT_LOCATION' => $C_PROJECT_LOCATION
                    ,'FORM_ID' => $latest_form_id->FORM_ID
                ));

            return response()->json(['message' => $latest_form_id] );
        }
        else if($PAPER_TYPE_CLEARANCE == "Barangay Clearance Tricycle"){
            $application_form = DB::Table('t_application_form')
                ->insert(array(
                    'FORM_NUMBER' => 'XXXX-XXX'
                    ,'PAPER_TYPE_ID' => $form_type_id->PAPER_TYPE_ID
                    ,'STATUS' => 'Pending'
                    ,'BUSINESS_ID' => $BUSINESS_ID
                    ,'RECEIVED_BY' => 'Shiela Mae A. Velga'
                    ,'REQUESTED_PAPER_TYPE_ID' => $clearance_type_id->PAPER_TYPE_ID
                ));

            $latest_form_id = DB::table('t_application_form')->select('FORM_ID')->latest('FORM_ID')->first();

            $barangay_clearance = DB::table('t_bf_barangay_clearance')
                ->insert(array(
                    'APPLICANT_NAME' => $D_APPLICANT_NAME
                    ,'REGISTERED_NAME' => $D_REGISTERED_NAME
                    ,'CONSTRUCTION_ADDRESS' => $D_CONSTRUCTION_ADDRESS
                    ,'D_DRIVER_LICENSE_NO' => $D_DRIVER_LICENSE_NO
                    ,'D_MUDGUARD_NO' => $D_MUDGUARD_NO
                    ,'D_CR_NO' => $D_CR_NO
                    ,'D_OR_NO' => $D_OR_NO
                    ,'FORM_ID' => $latest_form_id->FORM_ID
                ));

            return response()->json(['message' => $latest_form_id] );
        }
        else if($PAPER_TYPE_CLEARANCE == "Barangay Clearance General Purposes"){
            $application_form = DB::Table('t_application_form')
                ->insert(array(
                    'FORM_NUMBER' => 'XXXX-XXX'
                    ,'PAPER_TYPE_ID' => $form_type_id->PAPER_TYPE_ID
                    ,'STATUS' => 'Pending'
                    ,'BUSINESS_ID' => $BUSINESS_ID
                    ,'RECEIVED_BY' => 'Shiela Mae A. Velga'
                    ,'REQUESTED_PAPER_TYPE_ID' => $clearance_type_id->PAPER_TYPE_ID
                ));

            $latest_form_id = DB::table('t_application_form')->select('FORM_ID')->latest('FORM_ID')->first();

           $barangay_clearance = DB::table('t_bf_barangay_clearance')
                ->insert(array(
                    'PURPOSE' => $E_PURPOSE
                    ,'REGISTERED_NAME' => $E_REGISTERED_NAME
                    ,'CONSTRUCTION_ADDRESS' => $E_CONSTRUCTION_ADDRESS
                    ,'FORM_ID' => $latest_form_id->FORM_ID
                ));

            return response()->json(['message' => $latest_form_id] );
        }

    }

    public function SpecificBusiness(Request $request){
        $FORM_ID = $request->FORM_ID;
        $REQUESTED_PAPER_TYPE = $request->REQUESTED_PAPER_TYPE;

        if ($REQUESTED_PAPER_TYPE == "Barangay Business Permit"){
            $business_permit = DB::table('v_business_permit')
            ->where('FORM_ID', $FORM_ID)
            ->get();
            return response()->json(['business_permit' => $business_permit, 'requested_paper_type' => 'Barangay Business Permit']);    
        }       
    }

    public function BusinessPermit(Request $request){
        
        $BUSINESS_ID = $request->BUSINESS_ID;
        $AMENDMENT_FROM = $request->AMENDMENT_FROM;
        $AMENDMENT_TO = $request->AMENDMENT_TO;
        $IS_ENJOYING_TAZ_INCENTIVE = $request->IS_ENJOYING_TAZ_INCENTIVE;
        $SPECIFY_REASON = $request->SPECIFY_REASON;
        
        $BP_BUSINESS_REGISTRATION_AGENCY = $request->BP_BUSINESS_REGISTRATION_AGENCY;
        $BP_BUSINESS_REGISTRATION_FLAG = $request->BP_BUSINESS_REGISTRATION_FLAG;
        $BP_BUSINESS_CAPITALIZATION_AGENCY = $request->BP_BUSINESS_CAPITALIZATION_AGENCY;
        $BP_BUSINESS_CAPITALIZATION_FLAG = $request->BP_BUSINESS_CAPITALIZATION_FLAG;
        $OCCUPANCY_PERMIT_AGENCY = $request->OCCUPANCY_PERMIT_AGENCY;
        $OCCUPANCY_PERMIT_FLAG = $request->OCCUPANCY_PERMIT_FLAG;
        $CONTRACT_OF_LEASE_AGENCY = $request->CONTRACT_OF_LEASE_AGENCY;
        $CONTRACT_OF_LEASE_FLAG = $request->CONTRACT_OF_LEASE_FLAG;
        $GROSS_RECEIPT_AGENCY = $request->GROSS_RECEIPT_AGENCY;
        $GROSS_RECEIPT_FLAG = $request->GROSS_RECEIPT_FLAG;
        $GROSS_SALES_TAX_AMOUNT = $request->GROSS_SALES_TAX_AMOUNT;
        $GROSS_SALES_TAX_SURCHARGE = $request->GROSS_SALES_TAX_SURCHARGE;
        $TAX_OR_SIGNBOARD_AMOUNT = $request->TAX_OR_SIGNBOARD_AMOUNT;
        $TAX_OR_SIGNBOARD_SURCHARGE = $request->TAX_OR_SIGNBOARD_SURCHARGE;
        $PERMIT_FEE_AMOUNT = $request->PERMIT_FEE_AMOUNT;
        $PERMIT_FEE_SURCHARGE = $request->PERMIT_FEE_SURCHARGE;
        $GARBAGE_CHARGE_AMOUNT = $request->GARBAGE_CHARGE_AMOUNT;
        $GARBAGE_CHARGE_SURCHARGE = $request->GARBAGE_CHARGE_SURCHARGE;
        $SIGNBOARD_RENEWAL_FEE_AMOUNT = $request->SIGNBOARD_RENEWAL_FEE_AMOUNT;
        $SIGNBOARD_RENEWAL_FEE_SURCHARGE = $request->SIGNBOARD_RENEWAL_FEE_SURCHARGE;
        $CTC_AMOUNT = $request->CTC_AMOUNT;
        $CTC_SURCHARGE = $request->CTC_SURCHARGE;
        $OTHERS_AMOUNT = $request->OTHERS_AMOUNT;
        $OTHERS_SURCHARGE = $request->OTHERS_SURCHARGE;

        $OR_NUMBER = $request->OR_NUMBER;
        $AMOUNT = $request->AMOUNT;
        $PAYMENT_RECEIVED_BY = $request->PAYMENT_RECEIVED_BY;
        $PAYMENT_DATE_RECEIVED = $request->PAYMENT_DATE_RECEIVED;
        $RELEASED_DATE = $request->RELEASED_DATE;

        $insertPayment = DB::table('t_bf_payment_details')
            ->insert(array(
                'OR_NUMBER' => $OR_NUMBER
                ,'AMOUNT' => $AMOUNT
                ,'PAYMENT_RECEIVED_BY' => $PAYMENT_RECEIVED_BY
                ,'PAYMENT_DATE_RECEIVED' => $PAYMENT_DATE_RECEIVED
                ,'RELEASED_DATE' => $RELEASED_DATE
                ,'OR_DATE' => date('Y-m-d')
                ,'CREATED_AT' => date('Y-m-d')
                ,'ACTIVE_FLAG' => 1
            ));

        $insertLGU = DB::table('t_bf_main_lgu')
            ->insert(array(
                'BP_BUSINESS_REGISTRATION_AGENCY' => $BP_BUSINESS_REGISTRATION_AGENCY
                ,'BP_BUSINESS_REGISTRATION_FLAG' => $BP_BUSINESS_REGISTRATION_FLAG
                ,'BP_BUSINESS_CAPITALIZATION_AGENCY' => $BP_BUSINESS_CAPITALIZATION_AGENCY
                ,'BP_BUSINESS_CAPITALIZATION_FLAG' => $BP_BUSINESS_CAPITALIZATION_FLAG
                ,'OCCUPANCY_PERMIT_AGENCY' => $OCCUPANCY_PERMIT_AGENCY
                ,'OCCUPANCY_PERMIT_FLAG' => $OCCUPANCY_PERMIT_FLAG
                ,'CONTRACT_OF_LEASE_AGENCY' => $CONTRACT_OF_LEASE_AGENCY
                ,'CONTRACT_OF_LEASE_FLAG' => $CONTRACT_OF_LEASE_FLAG
                ,'GROSS_RECEIPT_AGENCY' => $GROSS_RECEIPT_AGENCY
                ,'GROSS_RECEIPT_FLAG' => $GROSS_RECEIPT_FLAG
                ,'GROSS_SALES_TAX_AMOUNT' => $GROSS_SALES_TAX_AMOUNT
                ,'GROSS_SALES_TAX_SURCHARGE' => $GROSS_SALES_TAX_SURCHARGE
                ,'TAX_OR_SIGNBOARD_AMOUNT' => $TAX_OR_SIGNBOARD_AMOUNT
                ,'TAX_OR_SIGNBOARD_SURCHARGE' => $TAX_OR_SIGNBOARD_SURCHARGE
                ,'PERMIT_FEE_AMOUNT' => $PERMIT_FEE_AMOUNT
                ,'PERMIT_FEE_SURCHARGE' => $PERMIT_FEE_SURCHARGE
                ,'GARBAGE_CHARGE_AMOUNT' => $GARBAGE_CHARGE_AMOUNT
                ,'GARBAGE_CHARGE_SURCHARGE' => $GARBAGE_CHARGE_SURCHARGE
                ,'SIGNBOARD_RENEWAL_FEE_AMOUNT' => $SIGNBOARD_RENEWAL_FEE_AMOUNT
                ,'SIGNBOARD_RENEWAL_FEE_SURCHARGE' => $SIGNBOARD_RENEWAL_FEE_SURCHARGE
                ,'CTC_AMOUNT' => $CTC_AMOUNT
                ,'CTC_SURCHARGE' => $CTC_SURCHARGE
                ,'OTHERS_AMOUNT' => $OTHERS_AMOUNT
                ,'OTHERS_SURCHARGE' => $OTHERS_SURCHARGE
                ,'CREATED_AT' => date('Y-m-d')
                ,'ACTIVE_FLAG' => 1

            ));

        $LATEST_PAYMENT = DB::table('t_bf_payment_details')->select('PAYMENT_DETAILS_ID')->latest('PAYMENT_DETAILS_ID')->first();
        $LATEST_LGU = DB::table('t_bf_main_lgu')->select('BF_MAIN_LGU_ID')->latest('BF_MAIN_LGU_ID')->first();
        
        $insertBusinessPermit = DB::table('t_bf_business_permit')
            ->insert(array(
                'BUSINESS_ID' => $BUSINESS_ID
                ,'BF_MAIN_LGU_ID' => $LATEST_LGU->BF_MAIN_LGU_ID
                ,'PAYMENT_DETAILS_ID' => $LATEST_PAYMENT->PAYMENT_DETAILS_ID
                ,'AMENDMENT_FROM' => $AMENDMENT_FROM
                ,'AMENDMENT_TO' => $AMENDMENT_TO
                ,'IS_ENJOYING_TAZ_INCENTIVE' => $IS_ENJOYING_TAZ_INCENTIVE
                ,'SPECIFY_REASON' => $SPECIFY_REASON
            ));


        return response()->json(['message' => 'nakarating mare'] );
    }


    public function CRUDBusiness(Request $request){
        $BUSINESS_NAME = $request->BUSINESS_NAME;
        $TRADE_NAME = $request->TRADE_NAME;
        $BUSINESS_NATURE_ID = $request->BUSINESS_NATURE_ID;
        $BUSINESS_OWNER_FIRSTNAME = $request->BUSINESS_OWNER_FIRSTNAME;
        $BUSINESS_OWNER_MIDDLENAME = $request->BUSINESS_OWNER_MIDDLENAME;
        $BUSINESS_OWNER_LASTNAME = $request->BUSINESS_OWNER_LASTNAME;
        $BUSINESS_ADDRESS = $request->BUSINESS_ADDRESS;
        $BUSINESS_OR_NUMBER = $request->BUSINESS_OR_NUMBER;
        $TIN_NO = $request->TIN_NO;
        $DTI_REGISTRATION_NO = $request->DTI_REGISTRATION_NO;
        $TYPE_OF_BUSINESS = $request->TYPE_OF_BUSINESS;
        $BUSINESS_POSTAL_CODE = $request->BUSINESS_POSTAL_CODE;
        $BUSINESS_EMAIL_ADD = $request->BUSINESS_EMAIL_ADD;
        $BUSINESS_TELEPHONE_NO = $request->BUSINESS_TELEPHONE_NO;
        $BUSINESS_MOBILE_NO = $request->BUSINESS_MOBILE_NO;
        $OWNER_ADDRESS = $request->OWNER_ADDRESS;
        $OWNER_POSTAL_CODE = $request->OWNER_POSTAL_CODE;
        $OWNER_EMAIL_ADD = $request->OWNER_EMAIL_ADD;
        $OWNER_TELEPHONE_NO = $request->OWNER_TELEPHONE_NO;
        $OWNER_MOBILE_NO = $request->OWNER_MOBILE_NO;
        $EMERGENCY_CONTACT_PERSON = $request->EMERGENCY_CONTACT_PERSON;
        $EMERGENCY_PERSON_CONTACT_NO = $request->EMERGENCY_PERSON_CONTACT_NO;
        $EMERGENCY_PERSON_EMAIL_ADD = $request->EMERGENCY_PERSON_EMAIL_ADD;
        $BUSINESS_AREA = $request->BUSINESS_AREA;
        $NO_EMPLOYEE_ESTABLISHMENT = $request->NO_EMPLOYEE_ESTABLISHMENT;
        $NO_EMPLOYEE_LGU = $request->NO_EMPLOYEE_LGU;
        $LESSOR_NAME = $request->LESSOR_NAME;
        $LESSOR_ADDRESS = $request->LESSOR_ADDRESS;
        $LESSOR_CONTACT_NO = $request->LESSOR_CONTACT_NO;
        $LESSOR_EMAIL_ADD = $request->LESSOR_EMAIL_ADD;
        $MONTHLY_RENTAL = $request->MONTHLY_RENTAL;
        $BUSINESS_OR_ACQUIRED_DATE = $request->BUSINESS_OR_ACQUIRED_DATE;
        $LINE_OF_BUSINESS_ID = $request->LINE_OF_BUSINESS_ID;
        $NO_OF_UNITS = $request->NO_OF_UNITS;
        $CAPITALIZATION = $request->CAPITALIZATION;
        $GROSS_RECEIPTS_ESSENTIAL = $request->GROSS_RECEIPTS_ESSENTIAL;
        $GROSS_RECEIPTS_NON_ESSENTIAL = $request->GROSS_RECEIPTS_NON_ESSENTIAL;
    
        $insert = DB::table('t_business_information')
            ->insert(array(
                'BUSINESS_NAME' => $BUSINESS_NAME
                ,'TRADE_NAME' => $TRADE_NAME
                ,'BUSINESS_NATURE_ID' => $BUSINESS_NATURE_ID
                ,'BUSINESS_OWNER_FIRSTNAME' => $BUSINESS_OWNER_FIRSTNAME
                ,'BUSINESS_OWNER_MIDDLENAME' => $BUSINESS_OWNER_MIDDLENAME
                ,'BUSINESS_OWNER_LASTNAME' => $BUSINESS_OWNER_LASTNAME
                ,'BUSINESS_ADDRESS' => $BUSINESS_ADDRESS
                ,'BUSINESS_OR_NUMBER' => $BUSINESS_OR_NUMBER
                ,'TIN_NO' => $TIN_NO
                ,'DTI_REGISTRATION_NO' => $DTI_REGISTRATION_NO
                ,'TYPE_OF_BUSINESS' => $TYPE_OF_BUSINESS
                ,'BUSINESS_POSTAL_CODE' => $BUSINESS_POSTAL_CODE
                ,'BUSINESS_EMAIL_ADD' => $BUSINESS_EMAIL_ADD
                ,'BUSINESS_TELEPHONE_NO' => $BUSINESS_TELEPHONE_NO
                ,'BUSINESS_MOBILE_NO' => $BUSINESS_MOBILE_NO
                ,'OWNER_ADDRESS' => $OWNER_ADDRESS
                ,'OWNER_POSTAL_CODE' => $OWNER_POSTAL_CODE
                ,'OWNER_EMAIL_ADD' => $OWNER_EMAIL_ADD
                ,'OWNER_TELEPHONE_NO' => $OWNER_TELEPHONE_NO
                ,'OWNER_MOBILE_NO' => $OWNER_MOBILE_NO
                ,'EMERGENCY_CONTACT_PERSON' => $EMERGENCY_CONTACT_PERSON
                ,'EMERGENCY_PERSON_CONTACT_NO' => $EMERGENCY_PERSON_CONTACT_NO
                ,'EMERGENCY_PERSON_EMAIL_ADD' => $EMERGENCY_PERSON_EMAIL_ADD
                ,'BUSINESS_AREA' => $BUSINESS_AREA
                ,'NO_EMPLOYEE_ESTABLISHMENT' => $NO_EMPLOYEE_ESTABLISHMENT
                ,'NO_EMPLOYEE_LGU' => $NO_EMPLOYEE_LGU
                ,'LESSOR_NAME' => $LESSOR_NAME
                ,'LESSOR_ADDRESS' => $LESSOR_ADDRESS
                ,'LESSOR_CONTACT_NO' => $LESSOR_CONTACT_NO
                ,'LESSOR_EMAIL_ADD' => $LESSOR_EMAIL_ADD
                ,'MONTHLY_RENTAL' => $MONTHLY_RENTAL 
                ,'BUSINESS_OR_ACQUIRED_DATE'   => $BUSINESS_OR_ACQUIRED_DATE
                ,'CREATED_AT' => date('Y-m-d')
                ,'STATUS' => 'Pending'

            ));

        $LASTEST_BUSINESS_ID = DB::table('t_business_information')->select('BUSINESS_ID')->latest('BUSINESS_ID')->first();


        $inserBusinessActivity = DB::table('t_bf_business_activity')
            ->insert(array(
                'LINE_OF_BUSINESS_ID' => $LINE_OF_BUSINESS_ID
                ,'NO_OF_UNITS' => $NO_OF_UNITS
                ,'CAPITALIZATION' => $CAPITALIZATION
                ,'GROSS_RECEIPTS_ESSENTIAL' => $GROSS_RECEIPTS_ESSENTIAL
                ,'GROSS_RECEIPTS_NON_ESSENTIAL' => $GROSS_RECEIPTS_NON_ESSENTIAL
                ,'BUSINESS_ID' => $LASTEST_BUSINESS_ID->BUSINESS_ID
            ));
    
    }

    public function BusinessApproval(Request $request){
        $BUSINESS_ID = $request->BUSINESS_ID;
        $STATUS = $request->STATUS;
        $APPROVED_BY = $request->APPROVED_BY;

        $insert = DB::table('t_business_approval')
            ->insert(array(
                'BUSINESS_ID' => $BUSINESS_ID
                ,'STATUS' => 'Evaluated'
                ,'APPROVED_BY' => $APPROVED_BY
                ,'DATE_APPROVED' => date('Y-m-d')
            ));

        $updateBusinessStatus = DB::table('t_business_information')
            ->where('BUSINESS_ID', $BUSINESS_ID)
            ->update(array(
                'STATUS' => $STATUS
            ));
    }


    public function BarangayClearance(Request $request){
        
        $SCOPE_OF_WORK_NAME = $request->SCOPE_OF_WORK_NAME;
        $SCOPE_OF_WORK_SPECIFY = $request->SCOPE_OF_WORK_SPECIFY;

        $BUSINESS_ID = $request->BUSINESS_ID;
        $REGISTERED_NAME = $request->REGISTERED_NAME;
        $KIND_OF_BUSINESS = $request->KIND_OF_BUSINESS;
        $CONSTRUCTION_ADDRESS = $request->CONSTRUCTION_ADDRESS;
        $OCCUPANCY_TYPE = $request->OCCUPANCY_TYPE;
        $KIND_OF_SIGNAGE = $request->KIND_OF_SIGNAGE;
        $SIGNAGE_WORDINGS = $request->SIGNAGE_WORDINGS;
        $NO_STOREYS_BUILDING = $request->NO_STOREYS_BUILDING;
        $START_DATE_INSTALLATION = $request->START_DATE_INSTALLATION;
        $END_COMPLETION = $request->END_COMPLETION;

        $ORIGINAL_TRANSFER_CERTIFICATE_AGENCY = $request->ORIGINAL_TRANSFER_CERTIFICATE_AGENCY;
        $ORIGINAL_TRANSFER_CERTIFICATE_FLAG = $request->ORIGINAL_TRANSFER_CERTIFICATE_FLAG;
        $TAX_DECLARATION_AGENCY = $request->TAX_DECLARATION_AGENCY;
        $TAX_DECLARATION_FLAG = $request->TAX_DECLARATION_FLAG;
        $TAX_CLEARANCE_AGENCY = $request->TAX_CLEARANCE_AGENCY;
        $TAX_CLEARANCE_FLAG = $request->TAX_CLEARANCE_FLAG;
        $CONTRACT_OF_LEASE_AGENCY = $request->CONTRACT_OF_LEASE_AGENCY;
        $CONTRACT_OF_LEASE_FLAG = $request->CONTRACT_OF_LEASE_FLAG;
        $GROSS_RECEIPT_AGENCY = $request->GROSS_RECEIPT_AGENCY;
        $GROSS_RECEIPT_FLAG = $request->GROSS_RECEIPT_FLAG;
        $SET_OF_MAP_AGENCY = $request->SET_OF_MAP_AGENCY;
        $SET_OF_MAP_FLAG = $request->SET_OF_MAP_FLAG;
        $BILLS_OF_MATERIALS_AGENCY = $request->BILLS_OF_MATERIALS_AGENCY;
        $BILLS_OF_MATERIALS_FLAG = $request->BILLS_OF_MATERIALS_FLAG;
        $OCCUPANCY_PERMIT_AGENCY = $request->OCCUPANCY_PERMIT_AGENCY;
        $OCCUPANCY_PERMIT_FLAG = $request->OCCUPANCY_PERMIT_FLAG;
        $OR_OF_TRICYCLE_AGENCY = $request->OR_OF_TRICYCLE_AGENCY;
        $OR_OF_TRICYCLE_FLAG = $request->OR_OF_TRICYCLE_FLAG;
        $PAYMENT_TODA_MEMBERSHIP_AGENCY = $request->PAYMENT_TODA_MEMBERSHIP_AGENCY;
        $PAYMENT_TODA_MEMBERSHIP_FLAG = $request->PAYMENT_TODA_MEMBERSHIP_FLAG;
        $CTC_AGENCY = $request->CTC_AGENCY;
        $CTC_FLAG = $request->CTC_FLAG;
        
        $GROSS_SALES_TAX_AMOUNT = $request->GROSS_SALES_TAX_AMOUNT;
        $GROSS_SALES_TAX_SURCHARGE = $request->GROSS_SALES_TAX_SURCHARGE;
        $TAX_OR_SIGNBOARD_AMOUNT = $request->TAX_OR_SIGNBOARD_AMOUNT;
        $TAX_OR_SIGNBOARD_SURCHARGE = $request->TAX_OR_SIGNBOARD_SURCHARGE;
        $PERMIT_FEE_AMOUNT = $request->PERMIT_FEE_AMOUNT;
        $PERMIT_FEE_SURCHARGE = $request->PERMIT_FEE_SURCHARGE;
        $GARBAGE_CHARGE_AMOUNT = $request->GARBAGE_CHARGE_AMOUNT;
        $GARBAGE_CHARGE_SURCHARGE = $request->GARBAGE_CHARGE_SURCHARGE;
        $SIGNBOARD_RENEWAL_FEE_AMOUNT = $request->SIGNBOARD_RENEWAL_FEE_AMOUNT;
        $SIGNBOARD_RENEWAL_FEE_SURCHARGE = $request->SIGNBOARD_RENEWAL_FEE_SURCHARGE;
        $CTC_AMOUNT = $request->CTC_AMOUNT;
        $CTC_SURCHARGE = $request->CTC_SURCHARGE;
        $OTHERS_AMOUNT = $request->OTHERS_AMOUNT;
        $OTHERS_SURCHARGE = $request->OTHERS_SURCHARGE;
        $CLEARANCE_FEE_AMOUNT = $request->CLEARANCE_FEE_AMOUNT;
        $CLEARANCE_FEE_SURCHARGE = $request->CLEARANCE_FEE_SURCHARGE;
        
        $OR_NUMBER = $request->OR_NUMBER;
        $AMOUNT = $request->AMOUNT;
        $PAYMENT_RECEIVED_BY = $request->PAYMENT_RECEIVED_BY;
        $PAYMENT_DATE_RECEIVED = $request->PAYMENT_DATE_RECEIVED;
        $RELEASED_DATE = $request->RELEASED_DATE;
  
        $insertScopeOfWork = DB::table('t_bf_scope_of_work')
            ->insert(array(
                'SCOPE_OF_WORK_NAME' => $SCOPE_OF_WORK_NAME
                ,'SCOPE_OF_WORK_SPECIFY' => $SCOPE_OF_WORK_SPECIFY
            ));

        $insertPayment = DB::table('t_bf_payment_details')
            ->insert(array(
                'OR_NUMBER' => $OR_NUMBER
                ,'AMOUNT' => $AMOUNT
                ,'PAYMENT_RECEIVED_BY' => $PAYMENT_RECEIVED_BY
                ,'PAYMENT_DATE_RECEIVED' => $PAYMENT_DATE_RECEIVED
                ,'RELEASED_DATE' => $RELEASED_DATE
                ,'OR_DATE' => date('Y-m-d')
                ,'CREATED_AT' => date('Y-m-d')
                ,'ACTIVE_FLAG' => 1
            ));
        
        $insertLgu = DB::table('t_bf_main_lgu')
            ->insert(array(
                'ORIGINAL_TRANSFER_CERTIFICATE_AGENCY' => $ORIGINAL_TRANSFER_CERTIFICATE_AGENCY
                ,'ORIGINAL_TRANSFER_CERTIFICATE_FLAG' => $ORIGINAL_TRANSFER_CERTIFICATE_FLAG
                ,'TAX_DECLARATION_AGENCY' => $TAX_DECLARATION_AGENCY
                ,'TAX_DECLARATION_FLAG' => $TAX_DECLARATION_FLAG
                ,'TAX_CLEARANCE_AGENCY' => $TAX_CLEARANCE_AGENCY
                ,'TAX_CLEARANCE_FLAG' => $TAX_CLEARANCE_FLAG
                ,'CONTRACT_OF_LEASE_AGENCY' => $CONTRACT_OF_LEASE_AGENCY
                ,'CONTRACT_OF_LEASE_FLAG' => $CONTRACT_OF_LEASE_FLAG
                ,'GROSS_RECEIPT_AGENCY' => $GROSS_RECEIPT_AGENCY
                ,'GROSS_RECEIPT_FLAG' => $GROSS_RECEIPT_FLAG
                ,'SET_OF_MAP_AGENCY' => $SET_OF_MAP_AGENCY
                ,'SET_OF_MAP_FLAG' => $SET_OF_MAP_FLAG
                ,'BILLS_OF_MATERIALS_AGENCY' => $BILLS_OF_MATERIALS_AGENCY
                ,'BILLS_OF_MATERIALS_FLAG' => $BILLS_OF_MATERIALS_FLAG
                ,'OCCUPANCY_PERMIT_AGENCY' => $OCCUPANCY_PERMIT_AGENCY
                ,'OCCUPANCY_PERMIT_FLAG' => $OCCUPANCY_PERMIT_FLAG
                ,'OR_OF_TRICYCLE_AGENCY' => $OR_OF_TRICYCLE_AGENCY
                ,'PAYMENT_TODA_MEMBERSHIP_AGENCY' => $PAYMENT_TODA_MEMBERSHIP_AGENCY
                ,'PAYMENT_TODA_MEMBERSHIP_FLAG' => $PAYMENT_TODA_MEMBERSHIP_FLAG
                ,'CTC_AGENCY' => $CTC_AGENCY
                ,'CTC_FLAG' => $CTC_FLAG
                
                ,'GROSS_SALES_TAX_AMOUNT' => $GROSS_SALES_TAX_AMOUNT
                ,'GROSS_SALES_TAX_SURCHARGE' => $GROSS_SALES_TAX_SURCHARGE
                ,'TAX_OR_SIGNBOARD_AMOUNT' => $TAX_OR_SIGNBOARD_AMOUNT
                ,'TAX_OR_SIGNBOARD_SURCHARGE' => $TAX_OR_SIGNBOARD_SURCHARGE
                ,'PERMIT_FEE_AMOUNT' => $PERMIT_FEE_AMOUNT
                ,'PERMIT_FEE_SURCHARGE' => $PERMIT_FEE_SURCHARGE
                ,'GARBAGE_CHARGE_AMOUNT' => $GARBAGE_CHARGE_AMOUNT
                ,'GARBAGE_CHARGE_SURCHARGE' => $GARBAGE_CHARGE_SURCHARGE
                ,'SIGNBOARD_RENEWAL_FEE_AMOUNT' => $SIGNBOARD_RENEWAL_FEE_AMOUNT
                ,'SIGNBOARD_RENEWAL_FEE_SURCHARGE' => $SIGNBOARD_RENEWAL_FEE_SURCHARGE
                ,'CTC_AMOUNT' => $CTC_AMOUNT
                ,'CTC_SURCHARGE' => $CTC_SURCHARGE
                ,'OTHERS_AMOUNT' => $OTHERS_AMOUNT
                ,'OTHERS_SURCHARGE' => $OTHERS_SURCHARGE
                ,'CLEARANCE_FEE_AMOUNT' => $CLEARANCE_FEE_AMOUNT
                ,'CLEARANCE_FEE_SURCHARGE' => $CLEARANCE_FEE_SURCHARGE
                ,'ACTIVE_FLAG' => 1
            ));

        $LATEST_PAYMENT = DB::table('t_bf_payment_details')->select('PAYMENT_DETAILS_ID')->latest('PAYMENT_DETAILS_ID')->first();
        $LATEST_LGU = DB::table('t_bf_main_lgu')->select('BF_MAIN_LGU_ID')->latest('BF_MAIN_LGU_ID')->first();
        $LASTEST_SCOPEOFWORK = DB::table('t_bf_scope_of_work')->select('SCOPE_OF_WORK_ID')->latest('SCOPE_OF_WORK_ID')->first();

        $insertBarangayClearanace = DB::table('t_bf_barangay_clearance')
            ->insert(array(
                'BUSINESS_ID' => $BUSINESS_ID
                ,'BF_MAIN_LGU_ID' => $LATEST_LGU->BF_MAIN_LGU_ID
                ,'PAYMENT_DETAILS_ID' => $LATEST_PAYMENT->PAYMENT_DETAILS_ID
                ,'REGISTERED_NAME' => $REGISTERED_NAME
                ,'KIND_OF_BUSINESS' => $KIND_OF_BUSINESS
                ,'SCOPE_OF_WORK_ID' => $LASTEST_SCOPEOFWORK->SCOPE_OF_WORK_ID
                ,'OCCUPANCY_TYPE' => $OCCUPANCY_TYPE
                ,'KIND_OF_SIGNAGE' => $KIND_OF_SIGNAGE
                ,'SIGNAGE_WORDINGS' => $SIGNAGE_WORDINGS
                ,'NO_STOREYS_BUILDING' => $NO_STOREYS_BUILDING
                ,'START_DATE_INSTALLATION' => $START_DATE_INSTALLATION
                ,'END_COMPLETION' => $END_COMPLETION
                
            ));
        return response()->json(['message' => 'nakarating mare'] );
    }

}

