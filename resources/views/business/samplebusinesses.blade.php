@extends('global.main')

{{--@if(session('session_permis_issuance_of_forms') != '1' && session('session_position') != 'Data Protection Officer')
<script type="text/javascript">location.href='{{route("Dashboard")}}'</script>
@else

@endif--}}

@section('title', "Businesses")

@section('page-css')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />

<!-- ================== END PAGE LEVEL STYLE ================== -->
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />


@endsection


@section('page-init-app')
<script>
    $(document).ready(function() {
        App.init();
        TableManageDefault.init();
        Notification.init();
        FormPlugins.init();

        $('#list-of-personal').DataTable();
        $('#list-of-business').DataTable();
        $('#datepicker-new').datepicker();

    });
</script>
@endsection

@section('page-init-table')
<script>
    $(document).ready(function() {
        TableManageDefault.init();
        Notification.init();
        FormPlugins.init();

    });
</script>

@endsection

@section('table-js')

<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>

@endsection


@section('date-js')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/masked-input/masked-input.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/password-indicator/js/password-indicator.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-tag-it/js/tag-it.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/moment.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-show-password/bootstrap-show-password.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js')}}"></script>
<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/demo/form-plugins.demo.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/parsley/dist/parsley.js')}}"></script>

@endsection

@section('page-js')

@if (Request::ajax())
@section('page-init-table') @show
@section('page-init-app') @stop

@else
@section('page-init-app') @show
@section('table-js') @show
@yield('page-add')
@yield('date-js')
@endif


@endsection

@section('page-functions')

{{--Modals--}}
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/demo/ui-modal-notification.demo.min.js')}}"></script>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->

<script type="text/javascript">

// $("#residentname").val($(this).closest("tbody tr").find("td:eq(2)").html());

$(document).ready(function()
{   
});




</script>



{{--For Modal EDIT Form--}}
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#data-table-default").on('click','#issuebtn',function() 
        { 
            $("#residentid").val($(this).closest("tbody tr").find("td:eq(0)").html());
            $("#residentname").val($(this).closest("tbody tr").find("td:eq(2)").html());


            var id = $(this).closest("tbody tr").find("td:eq(0)").html();
            var name = $(this).closest("tbody tr").find("td:eq(2)").html();

            $("#businessrid").val(id);
            $("#businessrname").val(name);
            $("#personalid").val(id);
            $("#personalrname").val(name);

        });

        $("#data-table-default").on('click','.editCategory', function()
        {
            $("#EditCatID").val($(this).closest("tbody tr").find("td:eq(0)").html());
            $("#EditF").val($(this).closest("tbody tr").find("td:eq(1)").html());
            $("#EditM").val($(this).closest("tbody tr").find("td:eq(2)").html());
            $("#EditL").val($(this).closest("tbody tr").find("td:eq(3)").html());

            $("#EditBusinessName").val($(this).closest("tbody tr").find("td:eq(8)").html());
            $("#EditBusinessAdd").val($(this).closest("tbody tr").find("td:eq(9)").html());
            $("#EditBusinessNum").val($(this).closest("tbody tr").find("td:eq(10)").html());
            $("#EditBusinessDate").val($(this).closest("tbody tr").find("td:eq(11)").html());
        });
    });
</script>

{{--FOR EDIT FORM--}}
<script>
    var Editform = document.getElementById("EditForm");

    $("#EditBTN").on('click',function (event) {

        event.preventDefault()
        var catid = $('#EditCatID').val()
        var firstname  = $('#EditF').val()
        var middlename = $('#EditM').val()
        var lastname   = $('#EditL').val()
        var businessname = $('#EditBusinessName').val()
        var location   = $("#EditBusinessLoc").children(":selected").attr("id")
        var businessnature = $('#EditBusinessNature').children(":selected").attr("id")
        var businessaddress = $('#EditBusinessAdd').val()
        var businessnumber = $('#EditBusinessNum').val()
        var businessdate = $('#EditBusinessDate').val()

        if ( firstname == "" )
        {
            ErrorAlert();
            $('#lblfirstname').html('Required field!').css('color', 'red');
        }
        else
            if ( middlename == "" )
            {
                ErrorAlert();
                $('#lblmiddlename').html('Required field!').css('color', 'red'); 
            }
            else
                if ( lastname == "" )
                {
                    ErrorAlert();
                    $('#lbllastname').html('Required field!').css('color', 'red'); 
                }
                else
                    if ( location == "" )
                    {
                        ErrorAlert();
                        $('#lblbusinessloc').html('Required field!').css('color', 'red'); 
                    }
                    else
                        if ( businessname == "" )
                        {
                            ErrorAlert();
                            $('#lblbusinessname').html('Required field!').css('color', 'red'); 
                        }
                        else
                            if ( businessnature == "" )
                            {
                                ErrorAlert();
                                $('#lblbusinessnature').html('Required field!').css('color', 'red'); 
                            }
                            else
                                if ( businessaddress == "" )
                                {
                                    ErrorAlert();
                                    $('#lblbusinessadd').html('Required field!').css('color', 'red'); 
                                }
                                else
                                    if ( businessnumber == "" )
                                    {
                                        ErrorAlert();
                                        $('#lblbusinessnum').html('Required field!').css('color', 'red'); 
                                    }
                                    else
                                    {
                                        swal({
                                            title: "Wait!",
                                            text: "Are you sure you want to edit this?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        })
                                        .then((willDelete) => 
                                        {
                                            if (willDelete) 
                                            {
                                                UpdateAlert();
                                                var fd = new FormData();
                                                fd.append('EditCatID',catid);
                                                fd.append('EditF',firstname);
                                                fd.append('EditM',middlename);
                                                fd.append('EditL',lastname);
                                                fd.append('EditBusinessName',businessname);
                                                fd.append('EditBusinessLoc',location);
                                                fd.append('EditBusinessNature',businessnature);
                                                fd.append('EditBusinessAdd',businessaddress);
                                                fd.append('EditBusinessNum',businessnumber);
                                                fd.append('EditBusinessDate',businessdate);
                                                fd.append('_token',"{{csrf_token()}}");

                                                $.ajax({

                                                    url:"{{route('BusinessStore')}}",
                                                    type:'post',
                                                    processData:false,
                                                    contentType:false,
                                                    cache:false,
                                                    data:fd,
                                                    success:function()
                                                    {

                                                        setTimeout(loadTbl,500); 

                                                    }   
                                                })

                                            } 
                                            else 
                                            {
                                                OperationCancel();    
                                            }
                                        });

                                    }


                                    function loadTbl() {
                                        $('#LoadTable').load("Businesses")
                                    }

                                    function UpdateAlert() {
                                        swal("Data have been successfully updated!", {
                                            icon: "success",
                                        });
                                    }

                                    function OperationCancel()
                                    {
                                        swal("Operation Cancelled.", {
                                            icon: "error",
                                        });
                                    }

                                });
                            </script>

                            @endsection

                            @section('page-add')



                            {{--For ADD FORM--}}
                            <script type="text/javascript"> 

                                var Addform = document.getElementById("AddForm");
                                $('#AddBtn').click(function(e) {
                                    e.preventDefault();


                                    var firstname  = $('#firstname').val()
                                    var middlename = $('#middlename').val()
                                    var lastname   = $('#lastname').val()
                                    var businessname = $('#businessname').val()
                                    var location   = $("#location_id").children(":selected").attr("id")
                                    var businessnature = $('#nature_id').children(":selected").attr("id")
                                    var businessaddress = $('#businessaddress').val()
                                    var businessnumber = $('#businessnumber').val()
                                    var businessdate = $('#businessdate').val()


                                    if ( firstname == "" )
                                    {
                                        ErrorAlert();
                                        $('#lblfirstname').html('Required field!').css('color', 'red');
                                    }
                                    else
                                        if ( middlename == "" )
                                        {
                                            ErrorAlert();
                                            $('#lblmiddlename').html('Required field!').css('color', 'red'); 
                                        }
                                        else
                                            if ( lastname == "" )
                                            {
                                                ErrorAlert();
                                                $('#lbllastname').html('Required field!').css('color', 'red'); 
                                            }
                                            else
                                                if ( location == "" )
                                                {
                                                    ErrorAlert();
                                                    $('#lblbusinessloc').html('Required field!').css('color', 'red'); 
                                                }
                                                else
                                                    if ( businessname == "" )
                                                    {
                                                        ErrorAlert();
                                                        $('#lblbusinessname').html('Required field!').css('color', 'red'); 
                                                    }
                                                    else
                                                        if ( businessnature == "" )
                                                        {
                                                            ErrorAlert();
                                                            $('#lblbusinessnature').html('Required field!').css('color', 'red'); 
                                                        }
                                                        else
                                                            if ( businessaddress == "" )
                                                            {
                                                                ErrorAlert();
                                                                $('#lblbusinessadd').html('Required field!').css('color', 'red'); 
                                                            }
                                                            else
                                                                if ( businessnumber == "" )
                                                                {
                                                                    ErrorAlert();
                                                                    $('#lblbusinessnum').html('Required field!').css('color', 'red'); 
                                                                }
                                                                else
                                                                {
                                                                    SuccessAlert();
                                                                    var fd = new FormData();
                                                                    fd.append('firstname',firstname);
                                                                    fd.append('middlename',middlename);
                                                                    fd.append('lastname',lastname);
                                                                    fd.append('businessname',businessname);
                                                                    fd.append('location',location);
                                                                    fd.append('businessnature',businessnature);
                                                                    fd.append('businessaddress',businessaddress);
                                                                    fd.append('businessnumber',businessnumber);
                                                                    fd.append('businessdate',businessdate);
                                                                    fd.append('_token',"{{csrf_token()}}");

                                                                    $.ajax({
                                                                        url:"{{route('BusinessStore')}}",
                                                                        type:'post',
                                                                        processData:false,
                                                                        contentType:false,
                                                                        cache:false,
                                                                        data:fd,
                                                                        success:function()
                                                                        {

                                                                            setTimeout(loadTbl,500);          
                                                                        }   
                                                                    })
                                                                }

                                                                function SuccessAlert() {
                                                                 swal({
                                                                    title: 'Success!',
                                                                    text: 'Category successfully added.',
                                                                    icon: 'success',

                                                                })
                                                             }


                                                             function ErrorAlert() {

                                                                 swal({
                                                                    title: 'Ooops!',
                                                                    text: 'Please fill out the necessary fields!',
                                                                    icon: 'error',
                                                                    buttons: {
                                                                        confirm: {
                                                                            visible: true,
                                                                            className: 'btn btn-danger',
                                                                            closeModal: true,
                                                                        }
                                                                    }
                                                                })
                                                             }

                                                             function loadTbl() {
                                                                $('#LoadTable').load("Businesses")
                                                            }
                                                        });


                                                    </script>

                                                    <script type="text/javascript">
                                                        $(document).ready(function()
                                                        {

                                                            $('#AddBusiness').click(function(e)
                                                            {

                                                             $.ajax({

                                                                url:"{{route('BusinessStore')}}",
                                                                type:'post',                               
                                                                cache:false,
                                                                data:$("#AddForm").serialize(),
                                                                success:function()
                                                                {
                                                                    location.reload();   
                                                                }   
                                                            })


                                                             e.preventDefault();
                                                         });


                                                            $("#list-of-business").on('click','.ORModalBtn',function()
                                                            {

                                                                $("#BusinessOwnerTxt").val($(this).closest('table tr').find('td:eq(1)').html());
                                                                
                                                                
                                                                $("#BusinessAddressTxt").val($(this).closest('table tr').find('td:eq(2)').html());
                                                                $("#BusinessNameTxt").val($(this).closest('table tr').find('td:eq(3)').html());
                                                                $("#BusinessORNumberTxt").val($(this).closest('table tr').find('td:eq(4)').html());


                                                            })

                                                        })


                                                    </script>
                                                    @endsection

                                                    @section('content')

                                                    <!-- begin #content -->
                                                    <div id="content" class="content">
                                                        <!-- begin breadcrumb -->
                                                        <ol class="breadcrumb pull-right">

                                                            <li class="breadcrumb-item active">Businesses</li>
                                                        </ol>
                                                        <!-- end breadcrumb -->
                                                        <!-- begin page-header -->
                                                        <h1 class="page-header">Businesses<small> All businesses in barangay.</small></h1>
                                                        <!-- end page-header -->

                                                        <!-- begin row -->
                                                        <div >

                                                            <!-- begin col-10 -->
                                                            <div>
                                                                <!-- begin panel -->
                                                                <div class="panel panel-inverse">


                                                                    <div>

                                                                    </div>       


                                                                    <div>
                                                                     <div class="panel panel-inverse">
                                                                        <!-- begin panel-heading -->
                                                                        <div class="panel-heading">
                                                                         <div class="panel-heading-btn">
                                                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                                                                        </div>
                                                                        <h4 class="panel-title">List of Businesses</h4>
                                                                    </div>
                                                                    <!-- end panel-heading -->
                                                                    <!-- begin alert -->
                                                                    <div class="alert alert-yellow fade show">
                                                                        <button type="button" class="close" data-dismiss="alert">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                        Business Records groups all the businesses in barangay.
                                                                    </div>
                                                                    <!-- end alert -->
                                                                    <!-- begin panel-body -->
                                                                    <div class="panel-body">


                                                                        <!-- begin row -->
                                                                        <div class="row">
                                                                            <!-- begin col-6 -->
                                                                            <div class="col-lg-12">
                                                                                <!-- begin nav-pills -->


                                                                                <div class="tab-content">

                                                                                    <br>
                                                                                    <br>



                                                                                    <div id="LoadTable">
                                                                                        <table  id="list-of-business" class="table table-striped table-bordered">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th hidden>Category ID</th>
                                                                                                   
                                                                                                    <th >Business Owner</th>
                                                                                                   
                                                                                                    <th >Business Address</th>
                                                                                                    <th >Business Name</th>
                                                                                                   
                                                                                                    <th >Business OR Number</th>

                                                                                                    <th >Status</th>
                                                                                                    <th >Actions</th>
                                                                                                </tr>
                                                                                            </thead>

                                                                                            <tbody>

                                                                                             @foreach($records as $record)
                                                                                             <tr >
                                                                                                <td hidden>{{ $record->BUSINESS_ID }} </td>

                                                                                                
                                                                                                <td  style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}" > {{ $record->BUSINESS_OWNER }}</td>
                                                                                               
                                                                                                <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}" >{{ $record->BUSINESS_ADDRESS }}</td>
                                                                                                <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}" >{{ $record->TRADE_NAME }}</td>
                                                                                                
                                                                                                <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}" >{{ $record->BUSINESS_OR_NUMBER }}</td>
                                                                                                @if ( $record->ACTIVE_FLAG == 1)
                                                                                                <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}"  >Active</td>
                                                                                                @else
                                                                                                <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}">Inactive</td>
                                                                                                @endif


                                                                                                <td  style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}" >


                                                                                                    <button type='button' class='btn btn-warning form-control ORModalBtn' data-toggle='modal' data-target='#ORModal' id="ORModalBtn" >
                                                                                                        <i class='fa fa-eye'></i> View
                                                                                                    </button>


                                                                                                </td>

                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                                <!-- #modal-view -->
                                                                                <div class="modal fade" id="ORModal">
                                                                                    <div class="modal-dialog" style="max-width: 30%">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header" style="background-color: #90ca4b">
                                                                                                <h4 class="modal-title" style="color: white">View Business</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                {{--modal body start--}}
                                                                                                {{--<h2 id="ViewBarangayName" align="center"></h2>--}}
                                                                                                <input type="text" name="BusinessIDTxt" id="BusinessIDTxt" hidden>
                                                                                                <div class="row">
                                                                                                 <div class="col-lg-12 col-md-6">
                                                                                                    <label style="display: block; text-align: left">&nbspBusiness Owner</label>
                                                                                                    <input type="text" id="BusinessOwnerTxt" name="BusinessOwnerTxt" style="display: block; text-align: left; color:black; background-color:white; font-weight: bold;" class="form-control disabled" readonly>
                                                                                                </div>
                                                                                               
                                                                                                <div class="col-lg-12">
                                                                                                     <br>
                                                                                                    <label style="display: block; text-align: left">&nbspBusiness Name</label>
                                                                                                    <input type="text" id="BusinessNameTxt" name="BusinessNameTxt" style="display: block; text-align: left; color:black; background-color:white; font-weight: bold; " class="form-control" readonly>
                                                                                                </div>

                                                                                                <br>
                                                                                            </div>
                                                                                            <br>
                                                                                            {{--<div class="row">
                                                                                                <div class="col-lg-6 col-md-6">
                                                                                                    <label style="display: block; text-align: left">&nbspBusiness Nature</label>
                                                                                                    <input type="text" id="BusinessNatureTxt" name="BusinessNatureTxt" style="display: block; text-align: left; color:black; background-color:white; font-weight: bold; " class="form-control" readonly>
                                                                                                </div>

                                                                                                <div class="col-lg-6 col-md-6">
                                                                                                    <label style="display: block; text-align: left">&nbspBusiness Location</label>
                                                                                                    <input type="text" id="BusinessLocationTxt" name="BusinessLocationTxt" style="display: block; text-align: left; color:black; background-color:white; font-weight: bold; " class="form-control" readonly>
                                                                                                </div>
                                                                                                <br>
                                                                                            </div><br>--}}
                                                                                            
                                                                                            <div class="row">
                                                                                             <div class="col-lg-12">
                                                                                                <label style="display: block; text-align: left">Business Address</label>
                                                                                                <input type="text" id="BusinessAddressTxt" name="BusinessAddressTxt" style="display: block; text-align: left; color:black; background-color:white ; font-weight: bold;" class="form-control" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <br>


                                                                                        <div class="row">
                                                                                            <div class="col-lg-12">
                                                                                                <label style="display: block; text-align: left;">Business OR Number</label>
                                                                                                <input type="text" id="BusinessORNumberTxt" name="BusinessORNumberTxt" style="display: block; text-align: left; color:black; background-color:white  font-weight: bold; " class="form-control" readonly>
                                                                                            </div>
                                                                                        </div>

                                                                                        {{--modal body end--}}
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- #modal-view-end -->
                                                                    </div>
                                                                    
                                                                   

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>       



                                            @endsection