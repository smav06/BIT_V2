@extends('global.main')

@section('title', "Resident Information")


@section('page-css')
<link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />

{{-- Wizard Form --}}
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/smart_wizard.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/parsley.css') }}" rel="stylesheet" />


@endsection


@section('page-js')
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

<script type="text/javascript">
	 $(document).ready(function() {
           App.init();
		TableManageDefault.init();
		$("table[id='tbl_business_lst']").DataTable({
			"bSort" : false
		});
    })
            
</script>
<script type="text/javascript">
	$('.hide_icon').click(function() {
		$('#other_id_1').hide();
		$('#other_id_2').hide();
		$('#other_id_3').hide();
	})

	$('.show_icon').click(function() {
		$('#other_id_1').show();
		$('#other_id_2').show();
		$('#other_id_3').show();
	})

</script>
@endsection

@section('content')
<div class="content">
	<ol class="breadcrumb pull-right">
			
		<li class="breadcrumb-item"><a href="javascript:;">Resident List</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Resident Information</a></li>
	</ol>

	<h1 class="page-header">Viewing of Resident Information <small>DILG Requirements</small></h1>
	<div class="tab-content">
		<table  class="table table-bordered" style="font-family: Arial;" id="tbl_main_form">
					<!--<li class="nav-profile " style="">
						 @foreach($result as $row)
													<a href="javascript:;" data-toggle="nav-profile">
														<div class="cover with-shadow"></div>
														
														<div class="image" >
															<img style="border-radius: 50%; padding: 5px; width: 150px" src="{{asset('upload/residentspics/')}}/{{$row->PROFILE_PICTURE}}" />
															
														</div>
														
													</a>
													@endforeach 
												</li><br>-->
						<thead>

							<tr>
								<th>
									{{-- <div class="row row-space-10"> --}}
										<div class="col-md-12"  >
											<center style="font-size: 20px;">
												Resident Information

												
												
											</center>
										</div>
									
									{{-- </div> --}}
									
								</th>
								
							</tr>
							{{-- <tr><h6>Hello</h6></tr> --}}
						</thead>
						<tbody>
							
							<tr style="background: #DCDCDC; color: #000000; font-size: small;">
								<td style="font-weight: bolder;"> &nbsp 1 BASIC INFORMATION</td>
							</tr>
							{{--  --}}
							@foreach($result as $row)
							<tr>
								<td>
									<div class="row">
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Full Name</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->FULL_NAME}}" type="text" class="form-control" readonly="">

											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="stats-content">
												<label>Gender</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->SEX}}" type="text" class="form-control" readonly="">

												</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Date of Birth</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->DATE_OF_BIRTH}}" type="text" class="form-control" readonly="">
												</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Place of Birth</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->PLACE_OF_BIRTH}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										
										

									</div>
								</td>
							</tr>
							{{-- Address  --}}
							<tr>
								<td>

									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="stats-content">
												
												<label>Adress</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->ADDRESS}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="stats-content">
												<label>Adress for Building</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->BUILDING}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										
									</div><br>
								</td>
							</tr>

							
							
							
							<tr style="background: #DCDCDC">
								<td style="font-weight: bolder; color: #000000; font-size: small;"> &nbsp 2 OTHER INFORMATION
									<i data-toggle="tooltip" title="Click to Show Information" class="btn btn-xs btn-icon btn-circle btn-success fa fa-eye show_icon" style="margin-left: 800px"></i>
									<i data-toggle="tooltip" title="Click to Hide Information" class="btn btn-xs btn-icon btn-circle btn-warning fa fa-minus hide_icon" style="margin-left: 3px"></i></td>

							</tr>
							
							<tr id="other_id_1">
								<td>
									<div class="row">
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Civil Status</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->CIVIL_STATUS}}" type="text" class="form-control" readonly="">

											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="stats-content">
												<label>Occupation</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->OCCUPATION}}" type="text" class="form-control" readonly="">

												</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Work Status</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->WORK_STATUS}}" type="text" class="form-control" readonly="">
												</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Date Started Working</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->DATE_STARTED_WORKING}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										
										

									</div>
								</td>
							</tr>
							{{-- 7 Business Info 2 --}}
							<tr id="other_id_2">
								<td><div class="row">
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Citizenship</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->CITIZENSHIP}}" type="text" class="form-control" readonly="">

											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="stats-content">
												<label>Relation to Household Head</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->RELATION_TO_HOUSEHOLD_HEAD}}" type="text" class="form-control" readonly="">

												</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Date of Arrival</label>
												<input style="font-size: 15px; font-weight: bolder; color: black" value="{{$row->DATE_OF_ARRIVAL}}" type="text" class="form-control" readonly="">
												</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Resident Type</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->TYPE_NAME}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										
										

									</div>
								</td>
							</tr>
							{{-- 8 Owner Info --}}
							<tr id="other_id_3">
								<td>
									<div class="row">
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Contact Number</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->CONTACT_NUMBER}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Educational Attainment</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->EDUCATIONAL_ATTAINMENT}}" type="text" class="form-control" readonly="">
											</div>
										</div>
										<div class="col-lg-3 col-md-6">
											<div class="stats-content">
												<label>Religion</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="{{$row->RELIGION}}" type="text" class="form-control" readonly="">
											</div>
										</div>
									</div>
								</td>
							</tr>
							
							<tr>
								<td align="right">
									<a class="btn btn-default" href="{{route('Resident')}}" style="background-color: #C0C0C0; font-weight:bolder;">Go back</a>
								</td>
							</tr>
							@endforeach
						</tbody>

					</table>
	</div>
	{{--
							
							<tr style="background: #DCDCDC; color: #000000;font-size: small;">
								<td >Migrants information </td>
							</tr>
							
							<tr>
								<td>
									<div class="col-lg-3 col-md-6">
									<div class="row">
										<div class="stats-content">
												<label>From what country</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="tondo manila" type="text" class="form-control" readonly="">
											</div>
											</div>
									</div>
								</td>
							</tr>
							<tr style="background: #DCDCDC; color: #000000;font-size: small;">
								<td >Transients information </td>
							</tr>
							
							<tr>
								<td>
									<div class="col-lg-3 col-md-6">
									<div class="row">
										<div class="stats-content">
												<label>From what country</label>
												<input style="font-size: 15px; font-weight: bolder; color: black; text-transform: capitalize;	" value="tondo manila" type="text" class="form-control" readonly="">
											</div>
											</div>
									</div>
								</td>
							</tr> --}}
</div>

@endsection