@extends('global.main')

@section('page-css')
{{-- For table --}}
<link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />

{{-- Wizard Form --}}
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/smart_wizard.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/parsley.css') }}" rel="stylesheet" />



@endsection

@section('content')
<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Permit/Certification/Clearance</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Request</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Permit</a></li>
	</ol>

	<h1 class="page-header">Request Permit <small>DILG Requirements</small></h1>



	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
			<h4 class="panel-title">Business</h4>
		</div>
		<!-- end panel-heading -->
		<div class="alert alert-yellow fade show">
			<button type="button" class="close" data-dismiss="alert">
				<span aria-hidden="true">×</span>
			</button>
			The following are the existing records of businesses in the barangay.
		</div>

		<!-- begin panel-body -->
		<div class="panel-body">
			<table id="tbl_business_lst" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Business Number</th>
						<th>Business Name</th>
						<th>Business Nature</th>
						<th>Address</th>
						<th>Owner's Name</th>
						<th>Status</th>
						{{-- <th>Period</th> --}}
						<th>Action</th>
						<th hidden>Area</th>
						<th hidden>gross ess</th>
						<th hidden>gross noness</th>
					</tr>
				</thead>
				<tbody>
					@foreach($approved_business as $row)
					<tr class="gradeC" id="{{$row->BUSINESS_ID}}">
						<td>{{$row->BUSINESS_OR_NUMBER}}</td>
						<td>{{$row->BUSINESS_NAME}}</td>
						<td>{{$row->LINE_OF_BUSINESS_NAME}}</td>
						<td>{{$row->BUSINESS_ADDRESS}}</td>
						<td>{{$row->BUSINESS_OWNER_FIRSTNAME}} {{$row->BUSINESS_OWNER_MIDDLENAME}} {{$row->BUSINESS_OWNER_LASTNAME}} </td>
						{{-- <td>{{$row->NEW_RENEW_STATUS}}</td> --}}
						@if($row->NEW_RENEW_STATUS == "New")
						<td><h5><span class="label label-success">New Business</span></h5>
						</td>		
						@else
						<td>
							<h5><span class="label label-purple">Renewed Business</span></h5>
							<h6>Gross Receipt: ₱{{$row->GROSS_RECEIPT_TOTAL}}</h6>
						</td>

						@endif
						<td>
							<button type="button" class="btn btn-primary" id="btnChooseApplication"  data-toggle="modal">
								<i class="fa fa-circle"></i> Request Business Permit
							</button>
						</td>
						<td hidden> {{$row->BUSINESS_AREA}}</td>
						<td hidden>{{$row->GROSS_RECEIPTS_ESSENTIAL}}</td>
						<td hidden>{{$row->GROSS_RECEIPTS_NON_ESSENTIAL}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- end panel-body -->
	</div>  


	<div class="modal fade" id="modal-ChooseApplication" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"  style="background: #2A72B5" >
					<h4 class="modal-title" style="color: #fff">Business Issuance</h4>
					<button type="button" class="close" onclick="hideModal()" aria-hidden="true" style="color: #fff">×</button>
				</div>
				<div class="modal-body">
					{{-- <div class="panel-body"> --}}
						<h3><b><label id="lbl_business_name" >Business:</label></b></h3> <input type="text" id="txt_business_id" hidden> <input type="text" id="txt_form_type" hidden>
						<form>
							<div class="col-md-10">
								<label>Select Permit:</label>
								<select class="form-control" id="sel_clearance_type" style="color: black;" >
									<option selected disabled value=""></option>
									<option>Barangay Business Permit</option>
									<option>Permit Use of Barangay Property Facility</option>
									<option>Display of Outdoor Advertisement</option>
								
								</select>
							</div>
							{{-- Business Permit --}}
							<div class="col-md-10" id="divBusinessPermit">
								<legend class="m-t-10"></legend>
								<h5 id="divFilloutInstruction">Fill out the following information:</h5>

								<div class="row row-space-10">
									<div class="col-md-6">
										<div class="form-group m-b-10 p-t-5">
											<label>Tax Year</label>
											<input type="text" id="txt_tax_year" class="form-control" value="<?php echo date("Y"); ?>">

										</div>
										<div class="form-group m-b-10">
											<label>Quarter</label>
											<input type="text" id="txt_quarter" class="form-control">

										</div>
										<div class="form-group m-b-10">
											<label>Barangay Permit</label>
											<input type="text" id="txt_barangay_permit" class="form-control">
										</div>
										<div class="form-group m-b-10">
											<label>Business Tax</label>
											<input type="text" id="txt_business_tax" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group m-b-10 p-t-5">
											<label>Garbage Fee</label>
											<input type="text" id="txt_garbage_fee" class="form-control">
										</div>
										<div class="form-group m-b-10">
											<label>Signboard</label>
											<input type="text" id="txt_signboard" class="form-control">
										</div>
										<div class="form-group m-b-10">
											<label>CTC</label>
											<input type="text" id="txt_ctc" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div id="divBusinessClearance">
								<br>
								<div class="col-md-10" id="divBusinessPermit">
								<h4>The gross receipt sales is more than ₱30,000. Request for Business Clearance <a href="{{route('RequestClearance')}}">here</a></h4>
																		
								</div>
							</div>
					
							
							<div id="">
								<br><legend class="m-t-10"></legend>
								<div class="col-md-10" id="divBusinessPermit">
											<label>Applicant's Name</label>
								<input type="text" id="" class="form-control">
																		
								</div>
							</div>

							
						</form>
					{{-- </div> --}}
					<legend class="m-t-10"></legend>
					<div align="right">
						<a onclick="hideModal()" class="btn btn-white m-r-5" >Close</a>
						<button  class="btn btn-lime m-r-9" style="background: #2A72B5" id="btnRequest">Request</button>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<input type="text" id="txt_gross_essential" hidden>
	<input type="text" id="txt_gross_nonessential" hidden>
	<input type="text" id="txt_business_nature" hidden>

</div>

@endsection

@section('page-js')

<script>
	$(document).ready(function() {
		App.init();
		TableManageDefault.init();
		$("table[id='tbl_business_lst']").DataTable();

		//hide
		$('#divBusinessPermit').hide();
		$('#divBusinessClearance').hide()
		
	});

	$('#tbl_business_lst').on('click', '#btnChooseApplication',function (){
		let row = $(this).closest("tr")
		,business_name =  $(row.find("td")[1]).text()
		,business_address = $(row.find("td")[3]).text()
		, business_owner = $(row.find("td")[4]).text()
		, business_nature = $(row.find("td")[2]).text()
		, business_area = $(row.find("td")[7]).text()
		, gross_essential = $(row.find("td")[8]).text()
		, gross_nonessential = $(row.find("td")[9]).text()
		;

		//General
		$('#txt_business_nature').val(business_nature);

		$("#txt_business_id").val(row.attr("id"));
		$('#modal-ChooseApplication').modal('show');
		$('#lbl_business_name').text(business_name);
		$('#txt_gross_essential').val(gross_essential);
		$('#txt_gross_nonessential').val(gross_nonessential);


	
	});

	$('#sel_clearance_type').on('change', function(){
		var clearance_type = $('#sel_clearance_type option:selected').text();

		if(clearance_type == "Barangay Business Permit"){
			$('#txt_form_type').val('Application Barangay Business Permit Form');
			//show
			
			//if Retailer 
			var ess, noness, total_gross, business_nature;
			ess = Number($('#txt_gross_essential').val());
			noness = Number($('#txt_gross_nonessential').val());
			total_gross = ess + noness;
			business_nature = $('#txt_business_nature').val();

			if(business_nature == "Retailer"){
				if(total_gross < 30000 && total_gross >= 1){
					$('#divBusinessPermit').show();
					$('#divBusinessClearance').hide()
				//	alert(total_gross)
				}
				else if(total_gross > 30000){
					$('#divBusinessPermit').hide();
					$('#divBusinessClearance').show()
				}
				// total gross = 0
				else if (total_gross == 0){
					$('#divBusinessPermit').show();
					

				}
			}

			
		}
		
	});

	$('#btnRequest').on('click', function(){
		var clearance_type = $('#sel_clearance_type option:selected').text();
		var form_type = $('#txt_form_type').val();
		var business_id = $('#txt_business_id').val();
		// Business Permit Requirement
		var tax_year = $('#txt_tax_year').val()
		, quarter = $('#txt_quarter').val()
		, barangay_permit = $('#txt_barangay_permit').val()
		, garbage_fee = $('#txt_garbage_fee').val()
		, signboard = $('#txt_signboard').val()
		, ctc = $('#txt_ctc').val()
		, business_tax = $('#txt_business_tax').val()
		;
		
		let data = {
			'_token' : " {{ csrf_token() }}"
			,'TAX_YEAR' : tax_year
			,'QUARTER' : quarter
			,'BARANGAY_PERMIT' : barangay_permit 
			,'GARBAGE_FEE' : garbage_fee
			,'SIGNBOARD' : signboard
			,'CTC' : ctc
			,'BUSINESS_TAX' : business_tax
			
			//General
			,'BUSINESS_ID' : business_id
			,'PAPER_TYPE_CLEARANCE' : clearance_type
			,'PAPER_TYPE_FORM' : form_type
		};

		console.log(data);

		$.ajax({
			url : "{{ route('BusinessIssuanceRequest') }}",
			method : 'POST',
			data : data,
			success : function(response) {
				swal({
					title: 'Success',
					text: 'Request Done!',
					icon: 'success',
				});
				window.location.reload();
				console.log(response["message"]);
			},
			error : function(error){
				console.log("error: " + error);
			}
		});	
	});


	// for modal
	function hideModal(){$('#modal-ChooseApplication').modal('hide');
		$('#sel_clearance_type').val('').change();
		$('#divBusinessClearance').hide();
		$('#divBusinessPermit').hide();

}
</script>


<script src="{{asset('custom/jasonday-printThis-edc43df/printThis.js')}}"></script>
{{-- Tables --}}
{{-- For table --}}
<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>
{{--Modals--}}
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/demo/ui-modal-notification.demo.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
{{-- Wizard Form --}}

<script src="{{asset('assets/plugins/parsley/dist/parsley.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets/js/demo/form-wizards-validation.demo.min.js')}}"></script>

<script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>

@endsection
