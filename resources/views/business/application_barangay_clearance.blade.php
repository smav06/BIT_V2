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
				<li class="breadcrumb-item"><a href="javascript:;">Barangay Clearance</a></li>
				{{-- <li class="breadcrumb-item active">Wizards + Validation</li> --}}
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Barangay Clearance Application <small></small></h1>
			<input type="text" id="txt_business_id" value="<?php echo $_GET['business_id'] ?>" style="display: none;" />
			
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form id="frm_BarangayClearance" name="form-wizard" class="form-control-with-bg">
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
											<label class="col-md-3 col-form-label text-md-right">Registered Name</label>
											<div class="col-md-6">
												<input type="text"  data-parsley-group="step-1"  class="form-control"  id="txt_registered_name" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Kind of Business</label>
											<div class="col-md-6">
												<input type="text"  data-parsley-group="step-1"  class="form-control"  id="txt_kind_business" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Construction Address</label>
											<div class="col-md-6">
												<input type="text"  data-parsley-group="step-1"  class="form-control"  id="txt_construction_address" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Scope of Work</label>
											<div class="col-md-6">
												<select class="form-control" id="sel_scope_of_work" data-parsley-required="true" data-parsley-group="step-1" >
													<option >-- Scope of Work --</option>
													<option>New construction</option>
													<option>Addition </option>
													<option> Repair </option>
													<option>Renovation</option>
													<option>Demolition</option>
													<option>Others (Specify Below)</option>
												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Specify Scope of Work</label>
											<div class="col-md-6">
												<input type="text"  data-parsley-group="step-1"  class="form-control"  id="txt_specify_work" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Occupancy Type</label>
											<div class="col-md-6">
												<select class="form-control" id="sel_occupancy_type" data-parsley-required="true" data-parsley-group="step-1" >
													<option >-- Occupancy Type --</option>
													<option>Residential     </option>
													<option>Commercial     </option>
													<option>Industrial     </option>
													<option>Street Furniture, Landscaping and Signboards    </option>
													<option>Others</option>

												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Kind of Signage</label>
											<div class="col-md-6">
												<select class="form-control" id="sel_kind_signage" data-parsley-required="true" data-parsley-group="step-1" >
													<option >-- Kind of Signage --</option>
													<option>Installed     </option>
													<option>Attached    </option>
													<option>Painted     </option>
													<option></option>
												</select>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Signage Wordings</label>
											<div class="col-md-6">
												<input type="text"  data-parsley-group="step-1"  class="form-control"  id="txt_signage_wordings" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Number of Storeys Building</label>
											<div class="col-md-6">
												<input type="number"  data-parsley-group="step-1"  class="form-control"  id="txt_no_of_storeys" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Estimated Installation Start Date</label>
											<div class="col-md-6">
												<input type="date"  data-parsley-group="step-1"  class="form-control"  id="txt_start_date_installation" />
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Completion End Date</label>
											<div class="col-md-6">
												<input type="date"  data-parsley-group="step-1"  class="form-control"  id="txt_end_date_completion" />
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
											<label class="col-md-3 col-form-label text-md-right">Original/Transfer Certificate of Title<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_oct_tct" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_oct_tct">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Tax Declaration<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_tax_declaration" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_tax_declaration">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
													
												</div>
											</div>
										</div>	
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Tax Clearance<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_tax_clearance" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_tax_clearance">
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
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Set of Map<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_set_of_map" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_set_of_map">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Bills of Material<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_bills_material" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_bills_material">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Occupancy Permit<span class="text-danger">&nbsp;</span></label>
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
											<label class="col-md-3 col-form-label text-md-right">OR/CR of Tricycle<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_or_tricycle" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_or_tricycle">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Payment of TODA membership dues<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_payment_toda_membership" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_payment_toda_membership">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Community Tax Certificate<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-6">
														<input type="text" placeholder="" class="form-control" data-parsley-group="step-2" id="txt_ctc" />
													</div>
													<div class="col-6">
														<select class="form-control" id="sel_ctc">
															<option>Not Needed</option>
															<option>Yes</option>
															<option>No</option>
														</select>
													</div>
												</div>
											</div>
										</div>

												<br>																							
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
											<label class="col-md-3 col-form-label text-md-right">Clearance/Certification Fee<span class="text-danger">&nbsp;</span></label>
											<div class="col-md-6">
												<div class="row row-space-6">
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_clearance_fee_amount" />
													</div>
													<div class="col-4" align="center">
														<input type="text" class="form-control" data-parsley-group="step-3" id="txt_clearance_fee_surcharge" />
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
								<p><a id="btnSubmitBarangayClearance" href="#" class="btn btn-primary btn-lg">Proceed to Business Profile</a></p>
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

	$('#frm_BarangayClearance').on('click', '#btnSubmitBarangayClearance', function(){

		var RegisteredName = $('#txt_registered_name').val()
			,KindOfBusiness = $('#txt_kind_business').val()
			,ConstructionAddress = $('#txt_construction_address').val()
			,ScopeOfWork= $('#sel_scope_of_work option:selected').text()
			,SpecifyWork = $('#txt_specify_work').val()
			,OccupancyType = $('#sel_occupancy_type option:selected').text()
			,KindofSignage = $('#sel_kind_signage option:selected').text()
			,SignageWordings = $('#txt_signage_wordings').val()
			,NumberOfStorey = $('#txt_no_of_storeys').val()
			,StartDate = $('#txt_start_date_installation').val()
			,EndDate = $('#txt_end_date_completion').val()
			,BusinessId = $('#txt_business_id').val()
			;

		var OctTctAgency = $('#txt_oct_tct').val()
			,OctTctFlag = $('#sel_oct_tct option:selected').text()
			,TaxDeclarationAgency = $('#txt_tax_declaration').val()
			,TaxDeclarationFlag = $('#sel_tax_declaration option:selected').text()
			,TaxClearanceAgency = $('#txt_tax_clearance').val()
			,TaxClearanceFlag = $('#sel_tax_clearance option:selected').text()
			,ContractLeaseAgency = $('#txt_contract_lease').val()
			,ContractLeaseFlag = $('#sel_contract_lease option:selected').text()
			,GrossReceiptsAgency = $('#txt_gross_receipt').val()
			,GrossReceiptsFlag = $('#sel_gross_receipt option:selected').text()
			,SetOfMapAgency = $('#txt_set_of_map').val()
			,SetOfMapFlag = $('#sel_set_of_map option:selected').text()
			,BillsOfMaterialAgency = $('#txt_bills_material').val()
			,BillsOfMaterialFlag = $('#sel_bills_material option:selected').text()
			,OccupancyPermitAgency = $('#txt_occupancy_permit').val()
			,OccupancyPermitFlag = $('#sel_occupancy_permit option:selected').text()
			,OrTricycleAgency = $('#txt_or_tricycle').val()
			,OrTricycleFlag = $('#sel_or_tricycle option:selected').text()
			,PaymentTodaMembershipAgency = $('#txt_payment_toda_membership').val()
			,PaymentTodaMembershipFlag = $('#sel_payment_toda_membership option:selected').text()
			,CtcAgency = $('#txt_ctc').val()
			,CtcFlag = $('#sel_ctc option:selected').text()

		    ,GrossSalesAmount = $('#txt_gross_sales_amount').val()
			,GrossSalesSurcharge = $('#txt_gross_sales_surcharge').val()
			,SignboardTaxAmount = $('#txt_signboard_tax_amount').val()
			,SignboardTaxSurcharge = $('#txt_signboard_tax_surchage').val()
			,PermitFeeAmount = $('#txt_permit_fee_amount').val()
			,PermitFeeSurcharge = $('#txt_permit_fee_surcharge').val()
			,ClearancFeeAmount = $('#txt_clearance_fee_amount').val()
			,ClearancFeeSurcharge = $('#txt_clearance_fee_surcharge').val()
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
		console.log(
			'ReleasedDate: ' + ReleasedDate + '| '
			,'OrNo: ' + OrNo + '| '
			,'OrAmount: ' + OrAmount + '| '
			,'ReceivedBy: ' + ReceivedBy + '| '
			,'DateReceived: ' + DateReceived + '| ' 
			);

		console.log(

			'GrossSalesAmount: ' + GrossSalesAmount + '| '
			,'GrossSalesSurcharge: ' + GrossSalesSurcharge + '| '
			,'SignboardTaxAmount: ' + SignboardTaxAmount + '| '
			,'SignboardTaxSurcharge: ' + SignboardTaxSurcharge + '| '
			,'PermitFeeAmount: ' + PermitFeeAmount + '| '
			,'PermitFeeSurcharge: ' + PermitFeeSurcharge + '| '
			,'ClearancFeeAmount: ' + ClearancFeeAmount + '|'
			,'ClearancFeeSurcharge: ' + ClearancFeeSurcharge + '|'
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
			'OctTctAgency: ' + OctTctAgency +'|'
			,'OctTctFlag: ' + OctTctFlag + '|'
			,'TaxDeclarationAgency: ' + TaxDeclarationAgency + '|'
			,'TaxDeclarationFlag: ' + TaxDeclarationFlag + '|'
			,'TaxClearanceAgency: ' + TaxClearanceAgency + '|'
			,'TaxClearanceFlag: ' + TaxClearanceFlag + '|'
			,'ContractLeaseAgency: ' + ContractLeaseAgency + '|'
			,'ContractLeaseFlag: ' + ContractLeaseFlag + '|'
			,'GrossReceiptsAgency: ' + GrossReceiptsAgency + '|'
			,'GrossReceiptsFlag: ' + GrossReceiptsFlag + '|'
			,'SetOfMapAgency: ' + SetOfMapAgency + '|'
			,'SetOfMapFlag: ' + SetOfMapFlag + '|'
			,'BillsOfMaterialAgency: ' + BillsOfMaterialAgency + '|'
			,'BillsOfMaterialFlag: ' + BillsOfMaterialFlag + '|'
			,'OccupancyPermitAgency: ' + OccupancyPermitAgency + '|'
			,'OccupancyPermitFlag: ' + OccupancyPermitFlag + '|'
			,'OrTricycleAgency: ' + OrTricycleAgency + '|'
			,'OrTricycleFlag: ' + OrTricycleFlag + '|'
			,'PaymentTodaMembershipAgency: ' + PaymentTodaMembershipAgency + '|'
			,'PaymentTodaMembershipFlag: ' + PaymentTodaMembershipFlag + '|'
			,'CtcAgency: ' + CtcAgency + '|'
			,'CtcFlag: ' + CtcFlag + '|'
			// ,': ' +  + '|'
			// ,': ' +  + '|'

			
			);

		console.log(
			'RegisteredName: ' + RegisteredName +'|'
			,'ConstructionAddress: ' + ConstructionAddress + '|'
			,'KindOfBusiness: ' + KindOfBusiness + '|'
			,'ScopeOfWork: ' + ScopeOfWork + '|'
			,'SpecifyWork: ' + SpecifyWork + '|'
			,'OccupancyType: ' + OccupancyType + '|'
			,'KindofSignage: ' + KindofSignage + '|'
			,'SignageWordings: ' + SignageWordings + '|'
			,'NumberOfStorey: ' + NumberOfStorey + '|'
			,'StartDate: ' + StartDate + '|'
			,'EndDate: ' + EndDate + '|'
			,'BusinessId: ' + BusinessId + '|'
			);


		let data = {
			'_token' : " {{ csrf_token() }}"
			,'BUSINESS_ID' : BusinessId
			,'REGISTERED_NAME' : RegisteredName
			,'KIND_OF_BUSINESS' : KindOfBusiness
			,'CONSTRUCTION_ADDRESS' : ConstructionAddress
			,'SCOPE_OF_WORK_NAME' : ScopeOfWork
			,'SCOPE_OF_WORK_SPECIFY' : SpecifyWork
			,'OCCUPANCY_TYPE' : OccupancyType
			,'KIND_OF_SIGNAGE' : KindofSignage
			,'SIGNAGE_WORDINGS' : SignageWordings
			,'NO_STOREYS_BUILDING' : NumberOfStorey
			,'START_DATE_INSTALLATION' : StartDate
			,'END_COMPLETION' : EndDate

			,'ORIGINAL_TRANSFER_CERTIFICATE_AGENCY' : OctTctAgency
			,'ORIGINAL_TRANSFER_CERTIFICATE_FLAG' : OctTctFlag
			,'TAX_DECLARATION_AGENCY' : TaxDeclarationAgency
			,'TAX_DECLARATION_FLAG' : TaxDeclarationFlag
			,'CONTRACT_OF_LEASE_AGENCY' : ContractLeaseAgency
			,'CONTRACT_OF_LEASE_FLAG' : ContractLeaseFlag
			,'GROSS_RECEIPT_AGENCY' : GrossReceiptsAgency
			,'GROSS_RECEIPT_FLAG' : GrossReceiptsFlag
			,'SET_OF_MAP_AGENCY' : SetOfMapAgency
			,'SET_OF_MAP_FLAG' : SetOfMapFlag
			,'BILLS_OF_MATERIALS_AGENCY' : BillsOfMaterialAgency
			,'BILLS_OF_MATERIALS_FLAG' : BillsOfMaterialFlag
			,'OCCUPANCY_PERMIT_AGENCY' : OccupancyPermitAgency
			,'OCCUPANCY_PERMIT_FLAG' : OccupancyPermitFlag
			,'OR_OF_TRICYCLE_AGENCY' : OrTricycleAgency
			,'OR_OF_TRICYCLE_FLAG' : OrTricycleFlag
			,'PAYMENT_TODA_MEMBERSHIP_AGENCY' : PaymentTodaMembershipAgency
			,'PAYMENT_TODA_MEMBERSHIP_FLAG' : PaymentTodaMembershipFlag
			,'CTC_AGENCY' : CtcAgency
			,'CTC_FLAG' : CtcFlag

			,'GROSS_SALES_TAX_AMOUNT' : GrossSalesAmount
			,'GROSS_SALES_TAX_SURCHARGE' : GrossSalesSurcharge
			,'TAX_OR_SIGNBOARD_AMOUNT' : SignboardTaxAmount
			,'TAX_OR_SIGNBOARD_SURCHARGE' : SignboardTaxSurcharge
			,'PERMIT_FEE_AMOUNT' : PermitFeeAmount
			,'PERMIT_FEE_SURCHARGE' : PermitFeeSurcharge
			,'GARBAGE_CHARGE_AMOUNT' : GarbageChargeAmount
			,'GARBAGE_CHARGE_SURCHARGE' : GarbageChargeSurcharge
			,'SIGNBOARD_RENEWAL_FEE_AMOUNT' : SignboardRenewalAmount
			,'SIGNBOARD_RENEWAL_FEE_SURCHARGE' : SignboardRenewalSurcharge
			,'CTC_AMOUNT' : CtcTaxAmount
			,'CTC_SURCHARGE' : CtcTaxSurcharge
			,'OTHERS_AMOUNT' : OtherAmount
			,'OTHERS_SURCHARGE' : OtherSurcharge
			,'CLEARANCE_FEE_AMOUNT' : ClearancFeeAmount
			,'CLEARANCE_FEE_SURCHARGE' : ClearancFeeSurcharge
			
			,'OR_NUMBER' : OrNo
			,'AMOUNT' : OrAmount
			,'PAYMENT_RECEIVED_BY' : ReceivedBy
			,'PAYMENT_DATE_RECEIVED' : DateReceived
			,'RELEASED_DATE' : ReleasedDate
		};

		$.ajax({
			url : "{{ route('BarangayClearance') }}",
			method : 'POST',
			data : data,
			success : function(response) {
				swal({
					title: 'Success',
					text: 'Saved Record!',
					icon: 'success',
				});				
				console.log(response["message"]);
				window.location.href = "{{route('BarangayClearanceBuilding')}}";
				
			},
			error : function(error){
				console.log("error: " + error);
				alert('may mali');
			}
		});	
	});


	
</script>


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


