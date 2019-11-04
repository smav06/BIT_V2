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
<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Business</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Business Application</a></li>
	</ol>

	<h1 class="page-header">Business Application<small>DILG Requirements</small></h1>


	<div class="tab-content">	
		{{-- NAV PILLS TAB 1 - ADD VISITATION --}}
		<div class="tab-pane fade active show" id="nav-pills-tab-1">
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					</div>
					<h4 class="panel-title">Business BusinessPermitApplication</h4>
				</div>
				<div class="alert alert-yellow fade show">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span>
					</button>
					The following are the existing records of the residents within the system.
				</div>
				<div class="panel-body">
					<table id="tbl_business_lst" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="text-nowrap">Business Number</th>
								<th class="text-nowrap">Business Name</th>
								<th class="text-nowrap">Trade Name</th>
								<th class="text-nowrap">Date Acquired</th>
								<th class="text-nowrap">Line of Business</th>
								<th class="text-nowrap">Status</th>
								<th class="text-nowrap">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($business as $row)
							<tr class="gradeC" id="{{$row->BUSINESS_ID}}">
								<td>{{ $row->BUSINESS_OR_NUMBER }}</td>
								<td>{{ $row->BUSINESS_NAME }}</td>
								<td>{{ $row->TRADE_NAME }}</td>
								<td>{{ $row->BUSINESS_OR_ACQUIRED_DATE }}</td>
								<td>{{ $row->LINE_OF_BUSINESS_NAME }}</td>
								
								@if($row->STATUS == "Approved")
									<td><a class="btn btn-xs btn-primary m-l-3" style="color: #fff">{{ $row->STATUS }}</a></td>

										<td>
										<a id="" class="btn btn-yellow m-r-5 m-b-5" style="color: #000" href="{{route('BusinessPermitApplication', ['business_id' => $row->BUSINESS_ID, 'business_name' => $row->BUSINESS_NAME]) }}">
											<i class="fa fa-edit" style="color:#000"></i>Business Permit
										</a>
										<a id="" class="btn btn-inverse m-r-5 m-b-5" style="color: #fff" href="{{route('BarangayClearanceApplication', ['business_id' => $row->BUSINESS_ID, 'business_name' => $row->BUSINESS_NAME]) }}">
											<i class="fa fa-edit" style="color:#fff"></i>Barangay Clearance
										</a>
									</td>
								@elseif($row->STATUS == "Pending")
									<td><a class="btn btn-xs btn-warning m-l-3" style="color: #fff">{{ $row->STATUS }}</a></td>

										<td>
										<a id="" class="btn btn-grey m-r-5 m-b-5" style="color: #000" onclick="return false">
											<i class="fa fa-edit" style="color:#000"></i>Business Permit
										</a>
										<a id="" class="btn btn-grey m-r-5 m-b-5" style="color: #000" onclick="return false">
											<i class="fa fa-edit" style="color:#0000"></i>Barangay Clearance
										</a>
									</td>
								@elseif($row->STATUS == "Declined")
									<td><a class="btn btn-xs btn-danger m-l-3" style="color: #fff">{{ $row->STATUS }}</a></td>

										<td>
										<a id="" class="btn btn-grey m-r-5 m-b-5" style="color: #000" onclick="return false">
											<i class="fa fa-edit" style="color:#000"></i>Business Permit
										</a>
										<a id="" class="btn btn-grey m-r-5 m-b-5" style="color: #000" onclick="return false">
											<i class="fa fa-edit" style="color:#0000"></i>Barangay Clearance
										</a>
									</td>
								@endif
								
								
								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>		
		
</div>
		
@endsection

@section('page-js')
	
<script>
	$(document).ready(function() {
		App.init();
		TableManageDefault.init();
		$("table[id='tbl_business_lst']").DataTable();
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
