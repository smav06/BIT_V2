 
@extends('global.main')

@section('page-css')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />

<!-- ================== END PAGE LEVEL STYLE ================== -->
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />


@endsection


@section('page-js')
<script>
    $(document).ready(function() {
        App.init();
        TableManageDefault.init();

    });
</script>
<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>


<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/highlight/highlight.common.js')}}"></script>
<script src="{{asset('assets/js/demo/render.highlight.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->


@endsection


@section('content')
    
        <!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Create Receipt Accountability <small>Review and Save</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      
      <!-- START PANEL -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">View Accountable Form Report for the Month of <?php echo date('F Y');?></h4>
        </div>
        <div class="panel-body">
          <!-- FIRST ROW -->
          
          <!-- FIRST ROW -->
        </div>
        <div class="panel">
          <div class="col-md-12" style="text-align: right">
            <div class="panel" style="background-color: #262626; padding: 1px"></div>
              &nbsp;
              <a href="#" class="btn btn-default"  style="font-size: 17px; background-color: #e6e6e6; border: 1px black solid">
                   <i class="ion-reply"></i>&nbsp;
                   Go Back
              </a>
              &nbsp;
              <button type="button" class="btn btn-primary" onclick="print();" style="font-size: 17px">
                   <i class="fa fa-print"></i>&nbsp;
                   Print Report
              </button>
              
            <div class="panel" style="padding: 10px"></div>
          </div>
        </div>
      </div>
      <!-- END PANEL -->

      


    </div>
    <!-- end #content -->
@endsection

                        