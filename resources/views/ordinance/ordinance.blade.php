@extends('global.main')

@if(session('session_permis_issuance_of_forms')!='1' && session('session_position')!='Data Protection Officer')
<script type="text/javascript">location.href='{{route("Dashboard")}}'</script>
@else

@endif

@section('title', "BitBo | Ordinance")

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


@endsection

@section('page-add')



{{--For ADD FORM--}}
<script type="text/javascript"> 

var Addform = document.getElementById("AddForm");
$('#AddBtn').click(function(e) {


    var title, author, assignoff, category, sanction, description, remarks;

    title = $('#title_txt').val();
    author = $('#author_txt').val();
    
    // category = $('#categname').children(":selected").attr("id");
    sanction = $('#sanction_txt').val();
    description = $('#desc_txt').val();
    remarks = $('#remarks_txt').val();
    file = $('#file_txt')[0].files;

    var fd = new FormData();
    fd.append('title',title);
    fd.append('author',author);
    
    // fd.append('category',category);temporary commented
    fd.append('santion',sanction);
    fd.append('description',description);
    fd.append('remarks',remarks);
    
    for(i=0;i<file.length;i++){
        fd.append('file[]',file[i]);
    }
    

    fd.append('_token', "{{ csrf_token() }}")
    
    $.ajax({

        url:"{{route('OrdinanceStore')}}",
        type:'post',        
        data:fd,
        processData: false,
        contentType: false,
        success:function(data)
        {
            if (data == "good")
            {
                SuccessAlert();
                window.location.reload();
            }
        }     
    })



});



//  Update Btn
$('#UpdateOrdinanceBtn').click(function(e) {


var title, author, assignoff, category, sanction, description, remarks;
ordinance_id = $('#ordinance_id_txt').val();
title = $('#TitleViewTxt').val();
author = $('#AuthorViewTxt').val();
assignoff = $('#OfficialAssignedViewTxt').children(":selected").attr("id");
category = $('#CategoryViewTxt').children(":selected").attr("id");
sanction = $('#SanctioNViewTxt').val();
description = $('#DescriptionViewTxt').val();
remarks = $('#RemarksViewTxt').val();
file = $('#file_update_txt')[0].files;




var fd = new FormData();
fd.append('ordinance_id',ordinance_id);
fd.append('title',title);
fd.append('author',author);
fd.append('assignoff',assignoff);
fd.append('category',category);
fd.append('santion',sanction);
fd.append('description',description);
fd.append('remarks',remarks);

for(i=0;i<file.length;i++){
        fd.append('file[]',file[i]);
}
    

fd.append('_token', "{{ csrf_token() }}")

$.ajax({

    url:"{{route('OrdinanceUpdate')}}",
    type:'post',        
    data:fd,
    processData: false,
    contentType: false,
    success:function(data)
    {
        if (data == "good")
        {
            SuccessAlert();
            window.location.reload();
        }
    }     
})



});

function SuccessAlert() {

   swal({
    title: 'Success!',
    text: 'Ordinance successfully updated.',
    icon: 'success',
})
}


</script>


    {{-- REMOVE BTN --}}
    <script>
        
        $(".remove-btn").click(function()
            {

                var ordinance_id =$(this).closest('table tr').find('td:eq(0)').html();
                swal({
                    title: "Wait!",
                    text: "Are you sure you want to remove this?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willResolve) => {
                        if (willResolve) {
                            swal("Data have been successfully removed!", {
                                icon: "success",

                            });

                            $.ajax({
                                    url:'RemoveOrdinance',
                                    type:'POST',                                    
                                    data:{ordinance_id : ordinance_id,
                                        _token       : '{{csrf_token()}}'
                                    },
                                    success:function()
                                    {
                                       location.reload();
                                    }

                                })  
                        } 
                        else {
                           swal("Operation Cancelled.", {
                               icon: "error",
                           });
                       }
                    });
            });
    </script>

{{--  View Btn --}}

<script type="text/javascript">
$(document).ready(function()
{



    $("#data-table-default").on('click','.ViewModal',function()
    {
        $("#ordinance_id_txt").val($(this).closest('table tr').find('td:eq(0)').html());
        // $("#OfficialAssignedViewTxt").val($(this).closest('table tr').find('td:eq(1)').html());
        $("#AuthorViewTxt").val($(this).closest('table tr').find('td:eq(1)').html());
        var title = $(this).closest('table tr').find('td:eq(2)').html();
        $('#TitleViewTxt').val(title);
        
        // $("#CategoryViewTxt").val($(this).closest('table tr').find('td:eq(4)').html());
       
        $("#RemarksViewTxt").val($(this).closest('table tr').find('td:eq(3)').html());
        $("#SanctionViewTxt").val($(this).closest('table tr').find('td:eq(4)').html());        
        var image_src = '{!!asset("ordinances/'+$(this).closest('table tr').find('td:eq(5)').html()+'")!!}';
        
        $("#FileViewTxt").attr('src',image_src);
        $("#DescriptionViewTxt").val($(this).closest('table tr').find('td:eq(6)').html());
        
        
    })

})


</script>
@endsection

@section('content')

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">

        <li class="breadcrumb-item active">Ordinance</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Ordinance<small> All ordinance in barangay.</small></h1>
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
                    <h4 class="panel-title">List of Ordinances </h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin alert -->
                <div class="alert alert-yellow fade show">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Ordinance Records groups all the businesses in barangay.
                    
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
                              <button type='button' class='btn btn-lime'data-toggle='modal' data-target='#OrdinanceModal' >
                                <i class='fa fa-plus'></i> Add New
                            </button>
                            <br>
                            <br><br>
                            <div id="LoadTable">
                                <table id="data-table-default" class="table table-striped table-bordered display compact" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th hidden>Ordinance ID</th>
                                            <th >Author</th>
                                            <th >Title</th>
                                            
                                            <th >Remarks</th>
                                            <th >Sanction</th>
                                            <th hidden>file</th>
                                            <th hidden>Description</th>
                                            <th >Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                     @foreach($ordinances as $record)
                                     <tr >
                                        <td hidden>{{ $record->ORDINANCE_ID }} </td>
                                        <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}"> {{ $record->ORDINANCE_AUTHOR }}</td>
                                        <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}">{{ $record->ORDINANCE_TITLE }}</td>                                        
                                        <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}">{{ $record->ORDINANCE_REMARKS }}</td>
                                        <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}">{{ $record->ORDINANCE_SANCTION }}</td>
                                        <td hidden>HIDDEN</td>
                                        <td hidden>{{ $record->ORDINANCE_DESCRIPTION }}</td>
                                        <td style="background-color: {{ $record->ACTIVE_FLAG == 1 ? '#ddefc9' : '#ffcdcc'}}" >
                                            <button type='button' class='btn btn-warning form-control ViewModal' data-toggle='modal' data-target='#ViewModal'>
                                                <i class='fa fa-eye'></i> View
                                            </button>
                                            <button type='button' class='btn btn-danger form-control remove-btn'>
                                                <i class='fa fa-times'></i> Remove
                                            </button>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                        <!-- #modal-view -->
                        <div class="modal fade" id="OrdinanceModal">
                            <div class="modal-dialog" style="max-width: 40%">
                                <form id="OrdinanceForm" method="post">
                                    {{csrf_field()}}

                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #90ca4b">
                                            <h4 class="modal-title" style="color: white; display: block; text-align: center;">Add Ordinance</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                        </div>
                                        <div class="modal-body">
                                            {{--modal body start--}}
                                            {{--<h2 id="ViewBarangayName" align="center"></h2>--}}
                                            <input type="text" name="BusinessIDTxt" id="BusinessIDTxt" hidden>                                            
                                            <div class="row">
                                                <div class="col-lg-12 col-md-6">
                                                    <div class="stats-content">
                                                     <label style="display: block; text-align: left">Title</label>
                                                     <input type="text" id="title_txt" name="title_txt" style="display: block; text-align: left; color:black; background-color:white; "  placeholder='' class="form-control" >
                                                 </div>
                                             </div>
                                         </div> <br>
                                         <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="stats-content">
                                                    <label style="display: block; text-align: left">Author</label>
                                                    <input type="text" id="author_txt" name="author_txt" style="display: block; text-align: left; color:black; background-color:white;" placeholder='' class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        {{-- temporary commented start--}}

                                        {{-- 
                                            <div class="row">
                                                <div  class="col-lg-12 col-md-12">
                                                    <div class="stats-content">
                                                        <label style="display: block; text-align: left">Assigned official</label>
                                                        <select id="assign_official" class="form-control" name="assign_official" data-style="select-with-transition">

                                                            @foreach($assign_official as $row)
                                                            <option id ="{{ $row->BARANGAY_OFFICIAL_ID }}">{{$row->FULLNAME}}</option> 
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                        --}}
                                        {{-- temporary commented end--}}

                                        <br>

                                        {{-- temporary commented start--}}
                                        {{-- <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label style="display: block; text-align: left">Category</label>
                                                <select id="categname" class="form-control" name="categname" data-style="select-with-transition">
                                                    @foreach($category as $key => $categ_name)
                                                    <option id ="{{ $key }}">{{$categ_name}}</option> 
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        {{-- temporary commented end--}}

                                        <br>
                                        <div class="row">
                                         <div class="col-lg-12">
                                            <label style="display: block; text-align: left">Sanction</label>
                                            <input type="text" id="sanction_txt" name="sanction_txt" style="display: block; text-align: left; color:black; background-color:white ;  " placeholder='' class="form-control" >
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-lg-12">
                                         <label style="display: block; text-align: left">Description</label>
                                         <textarea type="text" id="desc_txt" name="desc_txt" style="display: block; text-align: left; color:black; background-color:white;" placeholder='' class="form-control" ></textarea> 
                                     </div>
                                 </div><br>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <label style="display: block; text-align: left;">Remarks</label>
                                        <textarea type="text" id="remarks_txt" name="remarks_txt" style="display: block; text-align: left; color:black; background-color:white   " placeholder='' class="form-control" ></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label style="display: block; text-align: left;">File</label>
                                      <input type="file" id="file_txt" name="file_txt" style="display: block; text-align: left; color:black; background-color:white" accept="image/*"  placeholder='' class="form-control" multiple>
                                    </div>
                                </div>

                                {{--modal body end--}}
                            </div>
                            <div class="modal-footer">
                                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                <a href="javascript:;" class="btn btn-lime" id="AddBtn">Add</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- #modal-view-end -->


            
            <!-- #modal-view -->
            <div class="modal fade" id="ViewModal">
                <div class="modal-dialog" style="max-width: 50%">
                    <form id="" method="post">
                        {{csrf_field()}}

                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #90ca4b">
                                <h4 class="modal-title" style="color: white">View Ordinance</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                            </div>
                            <div class="modal-body">
                                {{--modal body start--}}

                                
                                <input type="text" id="ordinance_id_txt" hidden>
                                <h><label style="display: block; text-align: center">Ordinance Title</label></h>
                                <h3><b><input type="text" class="form-control" style="text-transform: capitalize; display: block; text-align: center" id="TitleViewTxt" name="TitleViewTxt"></b></h3>
                                <br>
                                
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="stats-content">
                                            <label style="display: block; text-align: left">&nbspAuthor</label>
                                            <input type="text" id="AuthorViewTxt" name="AuthorViewTxt" style="display: block; text-align: left; color:black; background-color:white;" placeholder='Author here...' class="form-control" >
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-6 col-md-6">
                                        <div class="stats-content">
                                            <label style="display: block; text-align: left">&nbspAssigned official</label>
                                            

                                            <select id="OfficialAssignedViewTxt" class="form-control" name="OfficialAssignedViewTxt" data-style="select-with-transition">

                                                        @foreach($assign_official as $row)
                                                        <option id ="{{ $row->BARANGAY_OFFICIAL_ID }}">{{$row->FULLNAME}}</option> 
                                                        @endforeach

                                                    </select>
                                        </div>
                                    </div> --}}

                                </div> <br>
                        
                            {{-- <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <label style="display: block; text-align: left">&nbspCategory</label>
                                    

                                    <select id="CategoryViewTxt" class="form-control" name="CategoryViewTxt" data-style="select-with-transition">

                                                    @foreach($category as $key => $categ_name)
                                                    <option id ="{{ $key }}">{{$categ_name}}</option> 
                                                    @endforeach

                                                </select>
                                   
                                </div>

                            </div> --}}
                            <br>
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <label style="display: block; text-align: left">&nbspRemarks</label>
                                    <input type="text" id="RemarksViewTxt" name="RemarksViewTxt" style="display: block; text-align: left; color:black; background-color:white;" placeholder='Description here...' class="form-control" />
                                </div>
                            </div><br>
                                
                            <div class="row">
                             <div class="col-lg-12">
                                <label style="display: block; text-align: left">&nbspSanction</label>
                                <input type="text" id="SanctionViewTxt" name="SanctionViewTxt" style="display: block; text-align: left; color:black; background-color:white ;  " placeholder='Sanction here...' class="form-control" />
                            </div>                            
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <label style="display: block; text-align: left;">Description</label>
                                    <textarea type="text" id="DescriptionViewTxt" name="DescriptionViewTxt" style="display: block; text-align: left; color:black; background-color:white   "placeholder='remarks here...' class="form-control" ></textarea>
                                </div>
                            </div>   
                            <h><label style="display: block; text-align: center">Ordinance Document</label></h>
                                <h3><b><label style="text-transform: capitalize; display: block; text-align: center"  name="FileViewTxt"><img src="" alt="No Uploaded Image" id="FileViewTxt" width="600px" height="600px" /> </label></b></h3>
                        <br>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <label style="display: block; text-align: left;">Image Upload</label>
                                <input type="file" id="file_update_txt" name="file_update_txt" style="display: block; text-align: left; color:black; background-color:white" accept="image/*"  placeholder='' class="form-control" multiple>
                            </div>
                        </div>



                        

                        {{--modal body end--}}
                    </div><br>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>

                        <a href="javascript:;" class="btn btn-warning" id="UpdateOrdinanceBtn">Update</a>


                    </div>

                    
                </div>
                

                

                
                
                                
                
                                
                    
                







                













                
            </form>
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