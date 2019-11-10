@extends('global.main')
@section('title', "BitBo | Business Registration")
@section('page-css')
{{-- For table --}}
<link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />

{{-- Wizard Form --}}
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/smart_wizard.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/parsley.css') }}" rel="stylesheet" />
{{-- <link href="{{ asset('assets/plugins/pace/pace.min.js') }}" rel="stylesheet" /> --}}
<script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
	{{-- <link href="../assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" /> --}}
	{{-- <script src="../assets/plugins/pace/pace.min.js"></script> --}}
@endsection

@section('content')

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Business</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Business Registration</a></li>
				{{-- <li class="breadcrumb-item active">Wizards + Validation</li> --}}
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Business Registration <small></small></h1>
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form id="frm_Business" name="form-wizard" class="form-control-with-bg">
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									Business Basic Info
									<small class="text-ellipsis">Business Name, Address, Business Type</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									Business Activity
									<small class="text-ellipsis">Lines of business, Unit</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-3">
								<span class="number">3</span>
								<span class="info text-ellipsis">
									Rented Business Place
									<small class="text-ellipsis">Lessor Name, Address, Monthly Rental</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-4">
								<span class="number">4</span> 
								<span class="info text-ellipsis">
									Completed
									<small class="text-ellipsis">Complete Business Registration</small>
								</span>
							</a>
						</li>
					</ul>
					<!-- end wizard-step -->
					<!-- begin wizard-content -->
					<div>
						<!-- begin step-1 -->
						<div id="step-1">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Business Basic Info</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Number <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" placeholder="BSN-321938" data-parsley-group="step-1"  class="form-control"  id="txt_business_number" data-parsley-required="true"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Name</label>
											<div class="col-md-6">
												<input type="text" placeholder="XYZ Computer Stuffs" data-parsley-group="step-1"  class="form-control"  id="txt_business_name" data-parsley-required="true"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Trade Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" placeholder="XYZ Computer Stuffs" data-parsley-group="step-1"  class="form-control"  id="txt_trade_name" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Nature of Business <span class="text-danger" >*</span></label>
											<div class="col-md-6">
												<select class="form-control" id="sel_business_nature" data-parsley-required="true">
													<option>-- Nature of Business --</option>
													@foreach($business_nature as $row)

													<option id="{{$row->BUSINESS_NATURE_ID}}">{{$row->BUSINESS_NATURE_NAME}}</option>
													@endforeach
													
												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Type of Business<span class="text-danger" >*</span></label>
											<div class="col-md-6">
												<select class="form-control" id="sel_business_type" data-parsley-required="true">
													<option >-- Type of Business --</option>
													<option value="Single">Single</option>
													<option value="Partnership">Partnership</option>
													<option value="Corporation">Corporation</option>
													<option value="Cooperative">Cooperative</option>
												</select>
											</div>
										</div>
										<!-- end form-group -->

										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Applicant/Tax Payer Name<span class="text-danger">*</span><span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4">
														{{-- <div class="col-md-6"> --}}
															<input type="text" placeholder="First Name" data-parsley-group="step-1" class="form-control" id="txt_firstname" data-parsley-required="true"/>
														{{-- </div> --}}
													</div>
													<div class="col-4">
														{{-- <div class="col-md-6"> --}}
															<input type="text" placeholder="Middle Name" data-parsley-group="step-1"  class="form-control" id="txt_middlename" />
														{{-- </div> --}}
													</div>
													<div class="col-4">
														{{-- <div class="col-md-6"> --}}
															<input type="text" placeholder="Last Name" data-parsley-group="step-1"  class="form-control" id="txt_lastname" data-parsley-required="true"/>
														{{-- </div> --}}
													</div>
												</div>
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">TIN No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_tin_no" data-mask="00/00/0000" data-mask-clearifnotmatch="true"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">DTI/SEC/CDA Registration No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_dti_no" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Address<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_business_address" data-parsley-required="true"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Postal<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_business_postal" data-parsley-required="true"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Email Address</label>
											<div class="col-md-6">
												<input type="email" name="email" placeholder="someone@example.com" data-parsley-type="email" class="form-control" data-parsley-group="step-1" id="txt_business_email"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Telephone No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_business_telephone" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Mobile No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_business_mobile" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Owner Address</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_owner_address" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Owner Postal</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_owner_postal"/>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Owner Email Address</label>
											<div class="col-md-6">
												<input type="email" name="email" placeholder="someone@example.com" data-parsley-type="email" class="form-control" data-parsley-group="step-1" id="txt_owner_email" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Owner Telephone No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_owner_telephone" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Owner Mobile No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_owner_mobile" />
											</div>
										</div>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Number of Employees<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
				
													<div class="col-6">
														{{-- <div class="col-md-6"> --}}
															<input type="text" placeholder="Total number of employees in Establishment" data-parsley-group="step-1" class="form-control" id="txt_employee_establishment" />
														{{-- </div> --}}
													</div>
													<div class="col-6">
														{{-- <div class="col-md-6"> --}}
															<input type="text" placeholder="Number of employees residing within LGU" data-parsley-group="step-1"  class="form-control" id="txt_employee_lgu" />
														{{-- </div> --}}
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Area</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_business_area" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Emergency Contact Person</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_emergency_contact_person" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Emergency Contact Person's Contact No</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_emergency_person_contact" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Emergency Contact Person's Email</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_emergency_person_email" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Date Acquired</label>
											<div class="col-md-6">
												<input type="date" placeholder="" class="form-control" data-parsley-group="step-1" id="txt_date_acquired" />
											</div>
										</div>
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->

									<div class="col-md-8 offset-md-2">

									</div>
								</div>

								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-1 -->
						<!-- begin step-2 -->
						<div id="step-2">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Business Activity</legend>
																				<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right" data-parsley-required="true">Line of Business<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<select class="form-control" id="sel_line_of_business">
													<option>-- Line of Business --</option>
													@foreach($line_of_business as $row)
														<option id="{{$row->LINE_OF_BUSINESS_ID}}">{{$row->LINE_OF_BUSINESS_NAME}}</option>
													@endforeach
													
												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">No of. Unit</label>
											<div class="col-md-6">
												<input type="number" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_no_unit" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Capitalization (New Business)</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_capitalization" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Gross/Sales Receipts Essential(For Renewal)</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_sales_receipt_essential" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Gross/Sales Receipts Non-Essential (For Renewal)</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_sales_receipt_nonessential" />
											</div>
										</div>
									</div>
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-2 -->
						<!-- begin step-3 -->
						<div id="step-3">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Note:  Fill up only if business place is rented/not owned</legend>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Lessor Full Name</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_lessor_name" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Lessor/Owner Address</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_lessor_address" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Lessor/Owner Postal</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_lessor_postal" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Lessor/Owner Email Address</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_lessor_email" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Lessor/Owner Telephone No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_lessor_telephone" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Lessor/Owner Mobile No.</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_lessor_mobile" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Monthly Rental</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_monthly_rental" />
											</div>
										</div>
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-3 -->
						<!-- begin step-4 -->
						<div id="step-4">
							<div class="jumbotron m-b-0 text-center">
								<h2 class="text-inverse">Register Successfully</h2>
								<p class="m-b-30 f-s-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. <br />Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
								<p><a id="btnSubmitBusiness" href="#" class="btn btn-primary btn-lg">Proceed to Business Profile</a></p>
							</div>
						</div>
						<!-- end step-4 -->
					</div>
					<!-- end wizard-content -->
				</div>
				<!-- end wizard -->
			</form>
			<!-- end wizard-form -->
		</div>
		<!-- end #content -->
	
@endsection

@section('page-js')
	
<script>
	$(document).ready(function() {
		App.init();
		FormWizardValidation.init();
		// $('#txt_tin_no').mask('0000-0000');
	});




	$('#frm_Business').on('click', '#btnSubmitBusiness', function(){

		var   BusinessNumber = $('#txt_business_number').val()
			, BusinessName = $('#txt_business_name').val()
			, TradeName = $('#txt_trade_name').val()
			, BusinessType  = $('#sel_business_type option:selected').text()
			, BusinessNature  = $('#sel_business_nature').children(':selected').attr("id")
			, FirstName =  $('#txt_firstname').val()
			, MiddleName =  $('#txt_middlename').val()
			, LastName =  $('#txt_lastname').val()
			, TinNo =  $('#txt_tin_no').val()
			, DtiNo =  $('#txt_dti_no').val()
			, BusinessAddress =  $('#txt_business_address').val()
			, BusinessPostal =  $('#txt_business_postal').val()
			, BusinessEmail =  $('#txt_business_email').val()
			, BusinessTelNo =  $('#txt_business_telephone').val()
			, BusinessMobileNo =  $('#txt_business_mobile').val()
			, OwnerAddress =  $('#txt_owner_address').val()
			, OwnerPostal =  $('#txt_owner_postal').val()
			, OwnerEmail =  $('#txt_owner_email	').val()
			, OwnerTelNo =  $('#txt_owner_telephone').val()
			, OwnerMobileNo =  $('#txt_owner_mobile').val()
			, EmployeeEstablishment =  $('#txt_employee_establishment').val()
			, EmployeeLgu =  $('#txt_employee_lgu').val()
			, BusinessArea =  $('#txt_business_area').val()
			, EmergencyPerson = $('#txt_emergency_contact_person').val()
			, EmergencyPersonContact = $('#txt_emergency_person_contact').val()
			, EmergencyPersonEmail =$('#txt_emergency_person_email').val()
			, LineOfBusiness  = $('#sel_line_of_business').children(':selected').attr("id")
			, NoUnit =  $('#txt_no_unit').val()
			, Capitalization =  $('#txt_capitalization').val()
			, SalesReceiptEssential =  $('#txt_sales_receipt_essential').val()
			, SalesReceiptNonEssential =  $('#txt_sales_receipt_nonessential').val()
			, LessorName = $('#txt_lessor_name').val()
			, LessorAddress =  $('#txt_lessor_address').val()
			, LessorPostal =  $('#txt_lessor_postal').val()
			, LessorEmail =  $('#txt_lessor_email').val()
			, LessorTelephone =  $('#txt_lessor_telephone').val()
			, LessorMobile =  $('#txt_lessor_mobile').val()
			, MonthlyRental =  $('#txt_monthly_rental').val()
			, DateAcquired = $('#txt_date_acquired').val()
			;

		console.log( "BusinessNumber: " + BusinessNumber
			,"BusinessName: " + BusinessName
			,"TradeName: " + TradeName
			,"BusinessType: " + BusinessType
			,"BusinessNature: " + BusinessNature
			,"FirstName: " + FirstName
			,"MiddleName: " + MiddleName
			,"LastName: " + LastName
			,"TinNo: " + TinNo
			,"DtiNo: " + DtiNo
			,"BusinessAddress: " + BusinessAddress
			,"BusinessPostal: " + BusinessPostal
			,"BusinessEmail: " + BusinessEmail
			,"BusinessTelNo: " + BusinessTelNo
			,"BusinessMobileNo: " + BusinessMobileNo
			,"OwnerAddress: " + OwnerAddress
			,"OwnerPostal: " + OwnerPostal
			,"OwnerEmail: " + OwnerEmail
			,"OwnerTelNo: " + OwnerTelNo
			,"OwnerMobileNo: " + OwnerMobileNo
			,"EmployeeEstablishment: " + EmployeeEstablishment
			,"EmployeeLgu: " + EmployeeLgu
			,"BusinessArea: " + BusinessArea
			,"EmergencyPerson: " + EmergencyPerson
			,"EmergencyPersonContact: " + EmergencyPersonContact
			,"EmergencyPersonEmail: " + EmergencyPersonEmail
			,"LineOfBusiness: " + LineOfBusiness
			,"NoUnit: " + NoUnit
			,"Capitalization: " + Capitalization
			,"SalesReceiptEssential: " + SalesReceiptEssential
			,"SalesReceiptNonEssential: " + SalesReceiptNonEssential
			,"LessorName: " + LessorName
			,"LessorAddress: " + LessorAddress
			,"LessorPostal: " + LessorPostal
			,"LessorEmail: " + LessorEmail
			,"LessorTelephone: " + 	LessorTelephone
			,"LessorMobile: " + LessorMobile
			,"MonthlyRental: " + MonthlyRental
			,"DateAcquired: " + DateAcquired
		); //DISPLAY

		let data = {
			'_token' : " {{ csrf_token() }}"
			,'BUSINESS_NAME' : BusinessName
			,'TRADE_NAME' : TradeName
			,'BUSINESS_NATURE_ID' : BusinessNature
			,'BUSINESS_OWNER_FIRSTNAME' : FirstName
			,'BUSINESS_OWNER_MIDDLENAME' : MiddleName
			,'BUSINESS_OWNER_LASTNAME' : LastName
			,'BUSINESS_ADDRESS' : BusinessAddress
			,'BUSINESS_OR_NUMBER' : BusinessNumber
			,'TIN_NO' : TinNo
			,'DTI_REGISTRATION_NO' : DtiNo
			,'TYPE_OF_BUSINESS' : BusinessType
			,'BUSINESS_POSTAL_CODE' : BusinessPostal
			,'BUSINESS_EMAIL_ADD' : BusinessEmail
			,'BUSINESS_TELEPHONE_NO' : BusinessTelNo
			,'BUSINESS_MOBILE_NO' : BusinessMobileNo
			,'OWNER_ADDRESS' : OwnerAddress
			,'OWNER_POSTAL_CODE' : OwnerPostal
			,'OWNER_EMAIL_ADD' : OwnerEmail
			,'OWNER_TELEPHONE_NO' : OwnerTelNo
			,'OWNER_MOBILE_NO' : OwnerMobileNo
			,'EMERGENCY_CONTACT_PERSON' : EmergencyPerson
			,'EMERGENCY_PERSON_CONTACT_NO' : EmergencyPersonContact
			,'EMERGENCY_PERSON_EMAIL_ADD' : EmergencyPersonEmail
			,'BUSINESS_AREA' : BusinessArea
			,'NO_EMPLOYEE_ESTABLISHMENT' : EmployeeEstablishment
			,'NO_EMPLOYEE_LGU' : EmployeeLgu
			,'LESSOR_NAME' : LessorName
			,'LESSOR_ADDRESS' : LessorAddress
			,'LESSOR_CONTACT_NO' : LessorTelephone
			,'LESSOR_EMAIL_ADD' : LessorEmail
			,'MONTHLY_RENTAL' : MonthlyRental
			,'BUSINESS_OR_ACQUIRED_DATE' : DateAcquired
			,'LINE_OF_BUSINESS_ID' : LineOfBusiness		
			,'NO_OF_UNITS' : NoUnit
			,'CAPITALIZATION' : Capitalization
			,'GROSS_RECEIPTS_ESSENTIAL' : SalesReceiptEssential
			,'GROSS_RECEIPTS_NON_ESSENTIAL' : SalesReceiptNonEssential

		};

		$.ajax({
			url : "{{ route('CRUDBusiness') }}",
			method : 'POST',
			data : data,
			success : function(response) {
				swal({
					title: 'Success',
					text: 'Saved Record!',
					icon: 'success',
				});
				// window.location.reload();
				window.location.href = "{{route('BusinessApplication')}}";

			},
			error : function(error){
				console.log("error: " + error);
				alert('may mali');
			}
		});	

	});
</script>


<script src="{{asset('custom/jasonday-printThis-edc43df/printThis.js')}}"></script>
{{-- Tables --}}
<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>
{{--Modals--}}
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/demo/ui-modal-notification.demo.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
{{-- Wizard Form --}}

<script src="{{asset('assets/plugins/parsley/dist/parsley.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets/js/demo/form-wizards-validation.demo.min.js')}}"></script>

@endsection
