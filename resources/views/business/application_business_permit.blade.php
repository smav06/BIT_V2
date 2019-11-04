@extends('global.main')

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
				<li class="breadcrumb-item"><a href="javascript:;">Application</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Business Permit</a></li>
				{{-- <li class="breadcrumb-item active">Wizards + Validation</li> --}}
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Business Permit Application <small></small></h1>
			
			<input type="text" id="txt_business_id" value="<?php echo $_GET['business_id'] ?>" style="display: none;" />
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form id="frm_BusinessPermit" name="form-wizard" class="form-control-with-bg">
				<h3 ><?php echo $_GET['business_name'] ?> <small></small></h3>
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									 Business Information
									<small class="text-ellipsis">Business Name, Address, Business Type</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									LGU Section
									<small class="text-ellipsis">Vefication Documents, Assessment of Applicable Fees</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-3">
								<span class="number">3</span>
								<span class="info text-ellipsis">
									Payment Details
									<small class="text-ellipsis">OR No, OR Amount, Date Received
									</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-4">
								<span class="number">4</span> 
								<span class="info text-ellipsis">
									Completed
									<small class="text-ellipsis">Complete Business Permit Application</small>
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
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Amendment To</label>
											<div class="col-md-6">
												<select class="form-control" id="sel_ammendment_to" data-parsley-required="true" data-parsley-group="step-1" >
													<option >-- Type of Business --</option>
													<option value="Single">Single</option>
													<option value="Partnership">Partnership</option>
													<option value="Corporation">Corporation</option>
													<option value="Cooperative">Cooperative</option>
												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Amendment From</label>
											<div class="col-md-6">
												<select class="form-control" id="sel_ammendment_from" data-parsley-required="true" data-parsley-group="step-1" >
													<option >-- Type of Business --</option>
													<option value="Single">Single</option>
													<option value="Partnership">Partnership</option>
													<option value="Corporation">Corporation</option>
													<option value="Cooperative">Cooperative</option>
												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Are you enjoying Tax Incentive?</label>
											<div class="col-md-6">
												<div class="checkbox checkbox-css">
													<input type="checkbox" id="chk_enojoying_tax" unchecked data-parsley-group="step-1" >
													<label for="chk_enojoying_tax">*Check the box if YES*</label>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Reason for enjoying Tax Incentive</label>
											<div class="col-md-6">
												<input type="text"  data-parsley-group="step-1"  class="form-control"  id="txt_reason" />
											</div>
										</div>
									</div>
								</div>
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
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">VERIFICATION OF DOCUMENTS</legend>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right"> <span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6" align="center">
														<label >Office/Agency</label> 	
													</div>
													<div class="col-6" align="center">
														<label >Yes/No/Not Needed</label>
													</div>
													
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business Registration<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_business_registration" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_business_registration">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Business capitalization (new)<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_business_capitalization" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_business_capitalization">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Occupancy Permit (new)<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_occupancy_permit" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_occupancy_permit">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Contract of Lease<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_contract_lease" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_contract_lease">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>		
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Gross Sales/Receipts<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_gross_receipt" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_gross_receipt">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>		<br>																							
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">ASSESSMENT OF APPLICABLE FEES</legend>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right"> <span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<label >Amount Due</label> 	
													</div>
													<div class="col-4" align="center">
														<label >Penalty/Surcharge</label>
													</div>
													<div class="col-4" align="center">
														<label >Total</label>
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right"> Gross sales tax/Capitalization<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_gross_sales_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_gross_sales_surcharge" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>			

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Tax on Signboard/Billboards<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_signboard_tax_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_signboard_tax_surchage" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>		
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Permit Fee<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_permit_fee_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_permit_fee_surcharge" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Garbage Charge<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_garbage_charge_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_garbage_charge_surchage" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Signboard/Billboard Renewal Fee<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_signboard_renewal_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_signboard_renewal_surcharge" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Community Tax Certificate<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_ctc_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_ctc_surcharge" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Others<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_other_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_other_surcharge" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">TOTAL FEES FOR LGU<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
											</div>
										</div>				
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right" > <strong> BUSINESS CLUB/ASSOCIATION DUES </strong><span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="" />
													</div>
												</div>
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
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Payment and Release Details</legend>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Released Date</label>
											<div class="col-md-6">
												<input type="date" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_released_date" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">	OR No</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_or_no" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">OR Amount</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_or_amount" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Received by</label>
											<div class="col-md-6">
												<input type="text" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_received_by" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Date Received</label>
											<div class="col-md-6">
												<input type="date" placeholder="" class="form-control" data-parsley-group="step-3" id="txt_date_received" />
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
								<p><a id="btnSubmitBusinessPermit" href="#" class="btn btn-primary btn-lg">Proceed to Business Profile</a></p>
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
	});

	$('#frm_BusinessPermit').on('click', '#btnSubmitBusinessPermit', function(){
		var	BusinessID = $('#txt_business_id').val()
			,AmmendmentFrom = $('#sel_ammendment_from option:selected').text()
			,AmmendmentTo = $('#sel_ammendment_to option:selected').text()
			,EnjoyingTax
			,SpecifyReason = $('#txt_reason ').val()

			,BusinessRegistrationAgency = $('#txt_business_registration').val()
			,BusinessRegistrationFlag = $('#sel_business_registration option:selected').text()
			,BusinessCapitalizationAgency = $('#txt_business_capitalization').val()
			,BusinessCapitalizationFlag = $('#sel_business_capitalization option:selected').text()
			,OccupancyPermitAgency = $('#txt_occupancy_permit').val()
			,OccupancyPermitFlag = $('#sel_occupancy_permit option:selected').text()
			,ContractLeaseAgency = $('#txt_contract_lease').val()
			,ContractLeaseFlag = $('#sel_contract_lease option:selected').text()
			,GrossReceiptsAgency = $('#txt_gross_receipt').val()
			,GrossReceiptsFlag = $('#sel_gross_receipt option:selected').text()
			
			,GrossSalesAmount = $('#txt_gross_sales_amount').val()
			,GrossSalesSurcharge = $('#txt_gross_sales_surcharge').val()
			,SignboardTaxAmount = $('#txt_signboard_tax_amount').val()
			,SignboardTaxSurcharge = $('#txt_signboard_tax_surchage').val()
			,PermitFeeAmount = $('#txt_permit_fee_amount').val()
			,PermitFeeSurcharge = $('#txt_permit_fee_surcharge').val()
			,GarbageChargeAmount = $('#txt_garbage_charge_amount').val()
			,GarbageChargeSurcharge = $('#txt_garbage_charge_surchage').val()
			,SignboardRenewalAmount = $('#txt_signboard_renewal_amount').val()
			,SignboardRenewalSurcharge = $('#txt_signboard_renewal_surcharge').val()
			,CtcTaxAmount = $('#txt_ctc_amount').val()
			,CtcTaxSurcharge = $('#txt_ctc_surcharge').val()
			,OtherAmount = $('#txt_other_amount').val()
			,OtherSurcharge = $('#txt_other_surcharge').val()

			,ReleasedDate = $('#txt_released_date').val()
			,OrNo = $('#txt_or_no').val()
			,OrAmount = $('#txt_or_amount').val()
			,ReceivedBy = $('#txt_received_by').val()
			,DateReceived = $('#txt_date_received').val()
			;
			if ($('#chk_enojoying_tax').is(":checked")){EnjoyingTax =1;}else{EnjoyingTax =0;}

		console.log(
			'BusinessID: ' + BusinessID
			,'AmmendmentFrom: ' + AmmendmentFrom
			,'AmmendmentTo: ' + AmmendmentTo
			,'EnjoyingTax: ' + EnjoyingTax
			,'SpecifyReason: ' + SpecifyReason
			);
		console.log(
			'BusinessRegistrationAgency: ' + BusinessRegistrationAgency + '| '
			,'BusinessRegistrationFlag: ' + BusinessRegistrationFlag + '| '
			,'BusinessCapitalizationAgency: ' + BusinessCapitalizationAgency + '| '
			,'BusinessCapitalizationFlag: ' + BusinessCapitalizationFlag + '| '
			,'OccupancyPermitAgency: ' + OccupancyPermitAgency + '| '
			,'OccupancyPermitFlag: ' + OccupancyPermitFlag + '| '
			,'ContractLeaseAgency: ' + ContractLeaseAgency + '| '
			,'ContractLeaseFlag: ' + ContractLeaseFlag + '| '
			,'GrossReceiptsAgency: ' + GrossReceiptsAgency + '| '
			,'GrossReceiptsFlag: ' + GrossReceiptsFlag + '| '
			,'GrossSalesAmount: ' + GrossSalesAmount + '| '
			,'GrossSalesSurcharge: ' + GrossSalesSurcharge + '| '
			,'SignboardTaxAmount: ' + SignboardTaxAmount + '| '
			,'SignboardTaxSurcharge: ' + SignboardTaxSurcharge + '| '
			,'PermitFeeAmount: ' + PermitFeeAmount + '| '
			,'PermitFeeSurcharge: ' + PermitFeeSurcharge + '| '
			,'GarbageChargeAmount: ' + GarbageChargeAmount + '| '
			,'GarbageChargeSurcharge: ' + GarbageChargeSurcharge + '| '
			,'SignboardRenewalAmount: ' + SignboardRenewalAmount + '| '
			,'SignboardRenewalSurcharge: ' + SignboardRenewalSurcharge + '| '
			,'CtcTaxAmount: ' + CtcTaxAmount + '| '
			,'CtcTaxSurcharge: ' + CtcTaxSurcharge + '| '
			,'OtherAmount: ' + OtherAmount + '| '
			,'OtherSurcharge: ' + OtherSurcharge + '| '
			);
		console.log(
			'ReleasedDate: ' + ReleasedDate + '| '
			,'OrNo: ' + OrNo + '| '
			,'OrAmount: ' + OrAmount + '| '
			,'ReceivedBy: ' + ReceivedBy + '| '
			,'DateReceived: ' + DateReceived + '| '
			);

		let data = {
			'_token' : " {{ csrf_token() }}"
			,'BUSINESS_ID' : BusinessID
			,'AMENDMENT_FROM' : AmmendmentFrom
			,'AMENDMENT_TO' :  AmmendmentTo
			,'IS_ENJOYING_TAZ_INCENTIVE' : EnjoyingTax
			,'SPECIFY_REASON' : SpecifyReason

			,'BP_BUSINESS_REGISTRATION_AGENCY' : BusinessRegistrationAgency
			,'BP_BUSINESS_REGISTRATION_FLAG' : BusinessRegistrationFlag
			,'BP_BUSINESS_CAPITALIZATION_AGENCY' : BusinessCapitalizationAgency
			,'BP_BUSINESS_CAPITALIZATION_FLAG' : BusinessCapitalizationFlag
			,'OCCUPANCY_PERMIT_AGENCY' : OccupancyPermitAgency
			,'OCCUPANCY_PERMIT_FLAG' : OccupancyPermitFlag
			,'CONTRACT_OF_LEASE_AGENCY' : ContractLeaseAgency
			,'CONTRACT_OF_LEASE_FLAG' : ContractLeaseFlag
			,'GROSS_RECEIPT_AGENCY' : GrossReceiptsAgency
			,'GROSS_RECEIPT_FLAG' : GrossReceiptsFlag
			,'GROSS_SALES_TAX_AMOUNT' : GrossSalesAmount
			,'GROSS_SALES_TAX_SURCHARGE' : GrossSalesSurcharge
			,'TAX_OR_SIGNBOARD_AMOUNT' : SignboardTaxAmount
			,'TAX_OR_SIGNBOARD_SURCHARGE' : SignboardTaxSurcharge
			,'PERMIT_FEE_AMOUNT' : PermitFeeAmount
			,'PERMIT_FEE_SURCHARGE' : PermitFeeSurcharge
			,'GARBAGE_CHARGE_AMOUNT' : GarbageChargeAmount
			,'GARBAGE_CHARGE_SURCHARGE' : GarbageChargeSurcharge
			,'SIGNBOARD_RENEWAL_FEE_AMOUNT' : SignboardRenewalAmount
			,'SIGNBOARD_RENEWAL_FEE_SURCHARGE' :  SignboardRenewalSurcharge
			,'CTC_AMOUNT' : CtcTaxAmount
			,'CTC_SURCHARGE' : CtcTaxSurcharge
			,'OTHERS_AMOUNT' : OtherAmount
			,'OTHERS_SURCHARGE' : OtherSurcharge

			,'OR_NUMBER' : OrNo
			,'AMOUNT' : OrAmount
			,'PAYMENT_RECEIVED_BY' : ReceivedBy
			,'PAYMENT_DATE_RECEIVED' : DateReceived
			,'RELEASED_DATE' : ReleasedDate

		};

		$.ajax({
			url : "{{ route('BusinessPermit') }}",
			method : 'POST',
			data : data,
			success : function(response) {
				swal({
					title: 'Success',
					text: 'Saved Record!',
					icon: 'success',
				});				
				console.log(response["message"]);
				window.location.href = "{{route('BarangayBusinessPermit')}}";
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


