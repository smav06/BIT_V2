@extends('global.main')

@section('title', "Blotter")

@section('page-css')

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{ asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-timepicker/jquery.timepicker.min.css') }}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

@endsection

@section('page-js')

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>
    {{--Modals--}}
    <script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/ui-modal-notification.demo.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-timepicker/jquery.timepicker.min.js') }}" ></script>
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script>
        $(document).ready(function() {
            App.init();
            TableManageDefault.init();
            Notification.init();

            $('#data-table-default1').DataTable();
            $('#AddScheduledDate').datepicker({
                minDate:0,
                dateFormat: "yy-mm-dd"
            });
            $('#add_incident_date').datepicker({
                maxDate:0,
                dateFormat: "yy-mm-dd"
            });
            $('#AddScheduledTime').timepicker({ 
                timeFormat:'h:i A',
                interval:5,
                minTime:'7:00 am',
                maxTime:'5:00 pm'
            });
           
        });

    </script>

    {{--For Edit button--}}
    <script>
        var Editform = document.getElementById("EditForm");

        $("a[id='EditBTN']").on('click',function () {
            var incidentDate = $('#EditIncidentDate').val()
            var incidentArea = $('#EditIncidentArea').val()
            var complainantName = $('#EditComplainantName').val()
            var accusedResident = $('#EditAccusedResident').children(":selected").attr("id")
            var blotterSubject = $('#EditBlotterSubject').children(":selected").attr("id")
            var complainStatement = $('#EditComplainStatement').val()
            var blotterID = $('#EditBlotterID').val()

            var fd = new FormData();
            fd.append('EditIncidentDate', incidentDate);
            fd.append('EditIncidentArea', incidentArea);
            fd.append('EditComplainantName', complainantName);
            fd.append('EditAccusedResident', accusedResident);
            fd.append('EditBlotterSubject', blotterSubject);
            fd.append('EditComplainStatement', complainStatement);
            fd.append('EditBlotterID', blotterID);
            fd.append('_token',"{{csrf_token()}}");


            if(incidentDate == "" || incidentArea == "" || complainantName == "" || blotterSubject == "" || complainStatement == ""){
                $('#reqIncidentDateEdit').html('Required field!').css('color', 'red');
                $('#reqIncidentAreaEdit').html('Required field!').css('color', 'red');
                $('#reqComplainantNameEdit').html('Required field!').css('color', 'red');
                $('#reqBlotterSubjectEdit').html('Required field!').css('color', 'red');
                $('#reqComplainStatementEdit').html('Required field!').css('color', 'red');
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

                });
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
                    .then((willResolve) => {
                        if (willResolve) {
                            swal("Data have been successfully updated!", {
                                icon: "success",

                            });

                            $.ajax({
                                    url:'UpdateBlotter',
                                    type:'POST',
                                    processData:false,
                                    contentType:false,
                                    cache:false,
                                    data:fd,
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

            }

        });
    </script>

    {{--For Resolved button--}}
    <script>
        var Editform = document.getElementById("EditForm");

        $("a[id='ResolvedBTN']").on('click',function () {
            var resolution = $('#EditResolution').val()
            var blotterID = $('#EditBlotterID').val()

            var fd = new FormData();
            fd.append('EditResolution', resolution);
            fd.append('EditBlotterID', blotterID)
            fd.append('_token',"{{csrf_token()}}");

            if(resolution == "")
            {
                $('#reqResolution').html('Required field!').css('color', 'red');
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

                });
            }
            else
            {
                swal({
                    title: "Wait!",
                    text: "Are you sure you want to mark this case as resolved?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willResolve) => {
                        if (willResolve) {
                            swal("Data have been successfully updated!", {
                                icon: "success",

                            });

                            $.ajax({
                                    url:"{{route('ResolvedBlotter')}}",
                                    type:'POST',
                                    processData:false,
                                    contentType:false,
                                    cache:false,
                                    data:fd,
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

            }

        });
    </script>

    {{--For Add Hearing button--}}
    <script>
        var Hearingform = document.getElementById("schedHearingForm");

        $("a[id='ScheduleBTN']").on('click',function () {
            var my_date = $('#AddScheduledDate').val()
            get_convert = moment(my_date).format('YYYY-MM-DD, h:mm A');
            schedDate = get_convert.split(", ")[0];
            schedTime = get_convert.split(", ")[1];
        //     var schedTime = $('#AddScheduledTime').val()
            
            var schedPlace = $('#addScheduledPlace').val()

            var blotterID = $('#EditBlotterIDH').val()

            var fd = new FormData();
            fd.append('AddScheduledDate', schedDate);
            fd.append('AddScheduledTime', schedTime);
            fd.append('addScheduledPlace', schedPlace);
            fd.append('EditBlotterIDH', blotterID)
            fd.append('_token',"{{csrf_token()}}");


            data  = {
                AddScheduledDate:schedDate,
                AddScheduledTime:schedTime,
                addScheduledPlace:schedPlace,
                EditBlotterIDH:blotterID,
                _token:"{{csrf_token()}}"
            };

           // alert(schedTime)

            if(schedDate == "" || schedPlace == "")
            {
                $('#reqScheduledDateAdd').html('Required field!').css('color', 'red');
                $('#reqScheduledPlaceAdd').html('Required field!').css('color', 'red');
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

                });
            }
            else
            {
                swal({
                    title: 'Success!',
                    text: 'You have successfully scheduled a hearing.',
                    icon: 'success',

                } );

                try
                {
                    $.ajax({
                        url:"{{route('AddPatawag')}}",
                        type:'POST',
                    
                        async:false,
                        data:data,
                        success:function()
                        {
                            location.reload();
                        }

                    })
                }
                
                catch(error)
                {
                    console.error(error)
                }

            }

        });
    </script>

    {{--For Summon button--}}
    <script>
        var Hearingform = document.getElementById("schedHearingForm");

        $("button[id='HearingBTN']").on('click',function () {

            var table = $("table[id = 'hearing-table'] tbody");
                           table.find("td").remove();
            var blotterID = $(this).closest("tr").find("td").first().text(); //$('#EditBlotterIDH').val();
            // alert(blotterID);
            var datetime;
            var split;
            
            var fd = new FormData();
            fd.append('EditBlotterIDH', blotterID);
            fd.append('_token',"{{csrf_token()}}");
            
                    $.ajax({
                        url:"{{route('Patawag')}}",
                        type:'POST',
                        processData:false,
                        contentType:false,
                        cache:false,
                        data:fd,
                        success:function(response)
                        {
                            
                           $.each(response["result"], function(){
                            
                            datetime = this["patawag_sched_datetime"];
                            split = datetime.split(" ");

                             table.append('<tr id="'+this["patawag_id"]+'"> <td hidden>'+this["patawag_id"]+'</td> <td>'+split[0]+'</td> <td>'+split[1]+'</td> <td>'+this["patawag_sched_place"]+"</td> </tr>");
                               
                           });
                           
                        }

                    });
        });

    </script>

    {{--For Resolve button--}}
    <script>
        $("#CloseCaseBtn").click(function(){


            var blotter_id = $(".resolve-blotter-id").val();
            var status = $("input[name=status_radio]:checked").val();
            var remarks = $(".remarks-txt").val();


            
            my_data ={
                blotter_id : blotter_id,
                status_name : status,
                remarks : remarks,
                _token : "{{csrf_token()}}"
            };



            
            
            if(remarks == "")
            {
                $('#reqResolution').html('Required field!').css('color', 'red');
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

                });
            }
            else
            {
                $.ajax({
                                    url:"{{route('ResolvedBlotter')}}",
                                    type:'POST',                                
                                    data:my_data,
                                    success:function()
                                    {
                                        location.reload();
                                    }

                                })

            }
        });
    </script>
    {{--For Summon button--}}
    <script>
        var Hearingform = document.getElementById("viewHearingForm");

        $("button[id='ViewHearingBTN']").on('click',function () {

            var table = $("table[id = 'view-hearing-table'] tbody");
                           table.find("td").remove();
            var blotterID = $(this).closest("tr").find("td").first().text(); //$('#EditBlotterIDH').val();
            // alert(blotterID);
            var fd = new FormData();
            fd.append('EditBlotterIDH', blotterID);
            fd.append('_token',"{{csrf_token()}}");
            console.log(fd);
                    $.ajax({
                        url:'Patawag',
                        type:'POST',
                        processData:false,
                        contentType:false,
                        cache:false,
                        data:fd,
                        success:function(response)
                        {
                            
                           $.each(response["result"], function(){
                                console.log(this);
                                {
                                    datetime = this["patawag_sched_datetime"];
                                    split = datetime.split(" ");

                                    table.append('<tr id="'+this["patawag_id"]+'"> <td hidden>'+this["patawag_id"]+'</td> <td>'+split[0]+'</td> <td>'+split[1]+'</td> <td>'+this["patawag_sched_place"]+"</td> </tr>");
                                    
                                }

                                
                           });
                           
                        }

                    });
        });
    </script>    

     {{--For Edit Patawag FORM--}}
    <script>
        var schedHearingForm = document.getElementById("schedHearingForm");

        $(document).ready(function(){

        $('#SaveBTN').click(function(e){
       
            var newSchedDate = $('#colSchedDate').text();
            var newSchedPlace = $('#colSchedPlace').text();
            var PatawagID = $('#colPatawagID').text();
           
            var fd = new FormData();
            fd.append('newSchedDate', newSchedDate);
            fd.append('newSchedPlace', newSchedPlace);
            fd.append('colPatawagID', PatawagID);
            fd.append('_token',"{{csrf_token()}}");

            try
            {
                $.ajax({
                    url:'{{route("UpdatePatawag")}}',
                    type:'post',
                   
                    processData:false,
                    contentType:false,
                    cache:false,

                    data:fd,
                    success:function()
                    {
                        location.reload();
                    }    
               });

            }
            catch(error)
            {
                console.error(error)
            }
           
          
        });
    });
        </script>

    {{--For ADD FORM--}}
    <script>
        var Addform = document.getElementById("AddForm");

        $('#AddBTN').click(function(){
            var incidentDate = $('#add_incident_date').val()
            var incidentArea = $('#add_incident_area').val()
            var complainantName = $('#add_complainant_name').val()
            var accusedResident = $('#add_resident_id').val()
            var blotterSubject = $('#add_blotter_subject_id').val()
            var complainStatement = $('#add_complain_statement').val()

            var fd = new FormData();
            fd.append('add_incident_date', incidentDate);
            fd.append('add_incident_area', incidentArea);
            fd.append('add_complainant_name', complainantName);
            fd.append('add_resident_id', accusedResident);
            fd.append('add_blotter_subject_id', blotterSubject);
            fd.append('add_complain_statement', complainStatement);
            fd.append('_token',"{{csrf_token()}}");


            if(incidentDate == "" || incidentArea == "" || complainantName == "" || blotterSubject == "" || complainStatement == ""){
                $('#reqIncidentDateAdd').html('Required field!').css('color', 'red');
                $('#reqIncidentAreaAdd').html('Required field!').css('color', 'red');
                $('#reqComplainantNameAdd').html('Required field!').css('color', 'red');
                $('#reqBlotterSubjectAdd').html('Required field!').css('color', 'red');
                $('#reqComplainStatementAdd').html('Required field!').css('color', 'red');
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
            else {

                 swal({
                    title: 'Success!',
                    text: 'Blotter successfully added.',
                    icon: 'success',

                } );

                    $.ajax({
                        url:'AddBlotter',
                        type:'POST',
                        processData:false,
                        contentType:false,
                        cache:false,
                        data:fd,
                        success:function()
                        {
                            location.reload();
                        }

                    })

                }
        });
    </script>

    {{--For Modal VIEW Form--}}
    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".viewCategory").click(function()
            {
                $("#ViewBlotterSub").text($(this).closest("tbody tr").find("td:eq(5)").html());
                $("#ViewComplainDate").text($(this).closest("tbody tr").find("td:eq(2)").html());
                $("#ViewComplainantName").text($(this).closest("tbody tr").find("td:eq(3)").html());
                $("#ViewAccusedResident").text($(this).closest("tbody tr").find("td:eq(4)").html());
                $("#ViewIncidentnDate").text($(this).closest("tbody tr").find("td:eq(6)").html());
                $("#ViewIncidentArea").text($(this).closest("tbody tr").find("td:eq(7)").html());
                $("#ViewComplainStatement").text($(this).closest("tbody tr").find("td:eq(8)").html());
                $("#ViewBlotterCode").text($(this).closest("tbody tr").find("td:eq(1)").html());

                $(".EditBlotterIDH").val($(this).closest("tbody tr").find("td:eq(0)").html());

                var table = $(".view-hearing-table");
                           table.find("td").remove();
            var blotterID = $(this).closest("tr").find("td").first().text(); //$('#EditBlotterIDH').val();
            // alert(blotterID);
            var fd = new FormData();
            fd.append('EditBlotterIDH', blotterID);
            fd.append('_token',"{{csrf_token()}}");
            console.log(fd);
                    $.ajax({
                        url:'Patawag',
                        type:'POST',
                        processData:false,
                        contentType:false,
                        cache:false,
                        data:fd,
                        success:function(response)
                        {
                            
                           $.each(response["result"], function(){
                                console.log(this);
                                {
                                    datetime = this["patawag_sched_datetime"];
                                    split = datetime.split(" ");

                                    table.append('<tr id="'+this["patawag_id"]+'"> <td hidden>'+this["patawag_id"]+'</td> <td>'+split[0]+'</td> <td>'+split[1]+'</td> <td>'+this["patawag_sched_place"]+"</td> </tr>");
                                    
                                }

                                
                           });
                           
                        }

                    });
            });

            $(".viewResolve").click(function()
            {
                $("#ViewResolveBlotterSub").text($(this).closest("tbody tr").find("td:eq(5)").html());
                $("#ViewResolveComplainDate").text($(this).closest("tbody tr").find("td:eq(2)").html());
                $("#ViewResolveComplainantName").text($(this).closest("tbody tr").find("td:eq(3)").html());
                $("#ViewResolveAccusedResident").text($(this).closest("tbody tr").find("td:eq(4)").html());
                $("#ViewResolveIncidentnDate").text($(this).closest("tbody tr").find("td:eq(6)").html());
                $("#ViewResolveIncidentArea").text($(this).closest("tbody tr").find("td:eq(7)").html());
                $("#ViewResolveComplainStatement").text($(this).closest("tbody tr").find("td:eq(8)").html());
                $("#ViewResolveBlotterCode").text($(this).closest("tbody tr").find("td:eq(1)").html());


                $(".EditBlotterIDH").val($(this).closest("tbody tr").find("td:eq(0)").html());

                var table = $(".view-hearing-table");
                           table.find("td").remove();
            var blotterID = $(this).closest("tr").find("td").first().text(); //$('#EditBlotterIDH').val();
            // alert(blotterID);
            var fd = new FormData();
            fd.append('EditBlotterIDH', blotterID);
            fd.append('_token',"{{csrf_token()}}");
            console.log(fd);
                    $.ajax({
                        url:'Patawag',
                        type:'POST',
                        processData:false,
                        contentType:false,
                        cache:false,
                        data:fd,
                        success:function(response)
                        {
                            
                           $.each(response["result"], function(){
                                console.log(this);
                                {
                                    datetime = this["patawag_sched_datetime"];
                                    split = datetime.split(" ");

                                    table.append('<tr id="'+this["patawag_id"]+'"> <td hidden>'+this["patawag_id"]+'</td> <td>'+split[0]+'</td> <td>'+split[1]+'</td> <td>'+this["patawag_sched_place"]+"</td> </tr>");
                                    
                                }

                                
                           });
                           
                        }

                    });
            });
        });
    </script>

    {{--For Closed Modal VIEW Form--}}
    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".viewClosedBlot").click(function()
            {
                $("#ViewClosedBlotterSub").text($(this).closest("tbody tr").find("td:eq(5)").html());
                $("#ViewClosedComplainDate").text($(this).closest("tbody tr").find("td:eq(2)").html());
                $("#ViewClosedDate").text($(this).closest("tbody tr").find("td:eq(7)").html());
                $("#ViewClosedComplainantName").text($(this).closest("tbody tr").find("td:eq(3)").html());
                $("#ViewClosedAccusedResident").text($(this).closest("tbody tr").find("td:eq(4)").html());
                $("#ViewClosedIncidentnDate").text($(this).closest("tbody tr").find("td:eq(6)").html());
                $("#ViewClosedIncidentArea").text($(this).closest("tbody tr").find("td:eq(8)").html());
                $("#ViewClosedComplainStatement").text($(this).closest("tbody tr").find("td:eq(9)").html());
                $("#ViewClosedBlotterCode").text($(this).closest("tbody tr").find("td:eq(1)").html());
                $("#ViewClosedResolution").text($(this).closest("tbody tr").find("td:eq(10)").html());
            });


            
        });
    </script>

   {{--For Modal EDIT Form--}}
    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".editCategory").click(function()
            {
                var incidentDateEdit = $(this).closest("tbody tr").find("td:eq(6)").html();
                $('#EditIncidentDate').datepicker({
                        maxDate:incidentDateEdit,
                        dateFormat: "yy-mm-dd"
                    });
                
                $("#EditBlotterID").val($(this).closest("tbody tr").find("td:eq(0)").html());
                $("#EditBlotterCode").val($(this).closest("tbody tr").find("td:eq(1)").html());
                $("#EditIncidentDate").val($(this).closest("tbody tr").find("td:eq(6)").html());
                $("#EditIncidentArea").val($(this).closest("tbody tr").find("td:eq(7)").html());
                $("#EditComplainantName").val($(this).closest("tbody tr").find("td:eq(3)").html());
                $("#EditAccusedResident").val($(this).closest("tbody tr").find("td:eq(4)").html());
                $("#EditBlotterSubject").val($(this).closest("tbody tr").find("td:eq(5)").html());
                $("#EditComplainStatement").val($(this).closest("tbody tr").find("td:eq(8)").html());
            });
        });
    </script>


    {{-- REMOVE BTN --}}
    <script>
        
        $(".remove-btn").click(function()
            {

                var blotterID = $(this).closest("tr").find("td").first().text();
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
                                    url:'RemoveBlotter',
                                    type:'POST',                                    
                                    data:{blotter_id : blotterID,
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

    {{--For Modal HEARING Form--}}
    <script type="text/javascript">
        $(document).ready(function()
        {
            $(".addHearing").click(function()
            {
                $("#EditBlotterIDH").val($(this).closest("tbody tr").find("td:eq(0)").html());
            });

        });
    </script>


@endsection



@section('content')

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="javascript:;">Cases</a></li>
            <li class="breadcrumb-item active">Blotter </li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Cases <small> Records of reported cases within the barangay.</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div >

            <!-- begin col-10 -->
            <div>
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                        </div>
                        <h4 class="panel-title">Blotter</h4>
                    </div>
                    <!-- end panel-heading -->
                    <!-- begin alert -->
                    <div class="alert alert-yellow fade show">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Blotter displays all the unclosed blotter within the barangay.
                    </div>
                    <!-- end alert -->
                    <!-- begin panel-body -->
                    <div class="panel-body">
                        <button type='button' class='btn btn-lime' data-toggle='modal' data-target='#AddModal' >
                            <i class='fa fa-plus'></i> Add New
                        </button>

                        <br>
                        <br>
                        <table id="data-table-default" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th hidden>Blotter ID </th>
                                <th>Blotter Code</th>
                                <th>Complain Date </th>
                                <th>Complainant Name </th>
                                <th>Respondent</th>
                                <th>Blotter Subject </th>
                                <th>Incident Date</th>
                                <th hidden>Incident Area </th>
                                <th hidden>Complain Statement </th>
                                <th hidden>Resolution</th>
                                <th hidden>Status</th>
                                <th style="width: 26%">Actions </th>
                            </tr>
                            </thead>

                            <tbody>
                        @foreach( $dispblotter as $blotter )

                            <tr >
                                <td hidden>{{$blotter->blotter_id}}</td>
                                <td>{{$blotter->blotter_code}}</td>
                                <td>{{$blotter->complaint_date}}</td>
                                <td>{{$blotter->complaint_name}}</td>
                                @if ($blotter->respondent == "")
                                <td>Unidentified</td>
                                @else
                                <td>{{$blotter->respondent}}</td>
                                @endif
                                <td>{{$blotter->blotter_subject}}</td>
                                <td>{{$blotter->incident_date}}</td>
                                <td hidden>{{$blotter->incident_area}}</td>
                                <td hidden>{{$blotter->complaint_statement}}</td>
                                <td hidden>{{$blotter->resolution}}</td>
                                <td hidden>{{$blotter->status}}</td>
                                <td>
                                    <button type='button' class='btn btn-warning viewCategory' data-toggle='modal' data-target='#ViewModal' >
                                        <i class='fa fa-eye'></i> View
                                    </button>

                                    
                                    <button type='button' id="HearingBTN" class='btn btn-yellow addHearing' data-toggle='modal' data-target='#HearingModal'>
                                        <i class='fa fa-bell'></i> Patawag
                                    </button>

                                    <button type='button'  class='btn btn-lime viewResolve' data-toggle='modal' data-target='#ResolveModal'>
                                        <i class='fa fa-check'></i> Close Case
                                    </button>

                                    <button type='button'  class='btn btn-danger remove-btn' >
                                        <i class='fa fa-times'></i> Remove
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <!-- begin panel-heading -->
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                        </div>
                        <h4 class="panel-title">Closed Blotter</h4>
                    </div>
                    <!-- end panel-heading -->
                    <!-- begin alert -->
                            <div class="alert alert-yellow fade show">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                Resolved Blotter displays all the closed blotters within the barangay.
                            </div>
                    <!-- end alert -->
                    <!-- begin panel-body -->
                    <div class="panel-body">
                        <br>
                        <br>
                        <table id="data-table-default1" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th hidden>Blotter ID </th>
                                <th>Blotter ID</th>
                                <th hidden="">Complain Date </th>
                                <th>Complainant Name </th>
                                <th>Respondent </th>
                                <th>Blotter Subject </th>
                                <th>Incident Date</th>
                                <th>Closed Date</th>
                                <th hidden>Incident Area </th>
                                <th hidden>Complain Statement </th>
                                <th style="width: 20%">Resolution</th>
                                <th hidden="">Status</th>
                                <th style="width: 19%">Actions </th>
                            </tr>
                            </thead>

                            <tbody>
                        @foreach( $resolvedBlotter as $rblotter )

                            <tr >
                                <td hidden>{{$rblotter->blotter_id}}</td>
                                <td>{{$rblotter->blotter_code}}</td>
                                <td hidden>{{$rblotter->complaint_date}}</td>
                                <td>{{$rblotter->complaint_name}}</td>
                                @if ($blotter->respondent == "")
                                <td>Unidentified</td>                                
                                @else
                                <td>{{$blotter->respondent}} </td>
                                @endif
                                <td>{{$rblotter->blotter_subject}}</td>
                                <td>{{$rblotter->incident_date}}</td>
                                <td>{{$rblotter->closed_date}}</td>
                                <td hidden>{{$rblotter->incident_area}}</td>
                                <td hidden>{{$rblotter->complaint_statement}}</td>
                                <td>{{$rblotter->resolution}}</td>
                                <td hidden>{{$rblotter->status}}</td>
                                <td>
                                    <button type='button' class='btn btn-warning viewClosedBlot' data-toggle='modal' data-target='#ViewClosedModal' >
                                        <i class='fa fa-eye'></i> View
                                    </button>
                                    <button type='button' id="ViewHearingBTN" class='btn btn-yellow addHearing' data-toggle='modal' data-target='#ViewHearingModal'>
                                        <i class='fa fa-bell'></i> Patawag
                                    </button>  
                                </td>
                            </tr>
                        @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>


                        <!-- #modal-EDIT -->
                        <div class="modal fade" id="ResolveModal">
                            <div class="modal-dialog "  style="max-width: 50%">
                                <form id="EditForm" method="POST">
                                    @csrf

                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#8fca4b ">
                                            <h4 class="modal-title" style="color: white">Do you want to close this case?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                        </div>
                                        <div class="modal-body">
                                            {{--modal body start--}}
                                            <label class="form-label hide">Blotter ID</label>
                                                <input type="text"  name="EditBlotterIDH" type="text" class="form-control hide EditBlotterIDH resolve-blotter-id"/>
                                            <h2 id="ViewResolveBlotterCode" align="center"></h2>
                                                <label style="display: block; text-align: center">Blotter Code</label>
                                        <hr>
                                            <label>Blotter Subject</label>
                                            <h4 id="ViewResolveBlotterSub"></h4>
                                        <br>
                                            <label>Complain Date</label>
                                            <h4 id="ViewResolveComplainDate"></h4>
                                        <br>
                                            <label>Complainant Name</label>
                                            <h4 id="ViewResolveComplainantName"></h4>
                                        <br>
                                            <label>Respondent Resident</label>
                                            <h4 id="ViewResolveAccusedResident"></h4>
                                        <br>
                                            <label>Incident Date</label>
                                            <h4 id="ViewResolveIncidentnDate"></h4>
                                        <br>
                                            <label>Incident Area</label>
                                            <h4 id="ViewResolveIncidentArea"></h4>
                                        <br>
                                            <label>Complain Statement</label>
                                            <h4 id="ViewResolveComplainStatement"></h4>
                                        <br>
                                            <label>Patawag History</label>
                                            <table id="view-hearing-table" class="table table-striped table-bordered view-hearing-table">
                                                <thead>
                                                <tr>
                                                    <th hidden>Patawag ID </th>
                                                    <th>Scheduled Date </th>
                                                    <th>Scheduled Time</th>
                                                    <th>Scheduled Place </th>
                                                </tr>
                                                </thead>

                                                <tbody>

                                                </tbody>
                                            </table>

                                            <label>Set Status</label>
                                            <div class="radio radio-css">
                                                <input type="radio" id="cssRadio1" name="status_radio" checked   value="1"/>
                                                <label for="cssRadio1" style="font-size: 20px">Resolved</label>
                                            </div>
                                            <div class="radio radio-css">
                                                <input type="radio" name="status_radio" id="cssRadio2" value="0"/>
                                                <label for="cssRadio2" style="font-size: 20px">For Referral</label>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>Remarks</label> <span id='reqScheduledPlaceAdd'></span>
                                                <input id="remarks-txt" name="remarks_txt" class="form-control remarks-txt" required="true" placeholder="Remarks for the case..." >
                                            </div>
                                            
                                        {{--modal body end--}}
                                        </div>
                                        <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <a id="CloseCaseBtn" href="javascript:;" class="btn btn-lime">Save</a>
                                        {{--<a id="DeleteBTN" href="javascript:;" class="btn btn-danger">Delete</a>--}}
                                        
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- #modal-view -->
                        <div class="modal fade" id="ViewModal">
                            <div class="modal-dialog" style="max-width: 50%">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #f59c1a">
                                        <h4 class="modal-title" style="color: white">View Blotter Details</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                    </div>
                                    <div class="modal-body">
                                        {{--modal body start--}}
                                        <label class="form-label hide">Blotter ID</label>
                                            <input type="text"  name="EditBlotterIDH" type="text" class="form-control hide EditBlotterIDH"/>
                                        <h2 id="ViewBlotterCode" align="center"></h2>
                                            <label style="display: block; text-align: center">Blotter Code</label>
                                        <hr>
                                            <label>Blotter Subject</label>
                                            <h4 id="ViewBlotterSub"></h4>
                                        <br>
                                            <label>Complain Date</label>
                                            <h4 id="ViewComplainDate"></h4>
                                        <br>
                                            <label>Complainant Name</label>
                                            <h4 id="ViewComplainantName"></h4>
                                        <br>
                                            <label>Respondent Resident</label>
                                            <h4 id="ViewAccusedResident"></h4>
                                        <br>
                                            <label>Incident Date</label>
                                            <h4 id="ViewIncidentnDate"></h4>
                                        <br>
                                            <label>Incident Area</label>
                                            <h4 id="ViewIncidentArea"></h4>
                                        <br>
                                            <label>Complain Statement</label>
                                            <h4 id="ViewComplainStatement"></h4>
                                        <br>
                                            <label>Patawag History</label>
                                            <table id="view-hearing-table" class="table table-striped table-bordered view-hearing-table">
                                                <thead>
                                                <tr>
                                                    <th hidden>Patawag ID </th>
                                                    <th>Scheduled Date </th>
                                                    <th>Scheduled Time</th>
                                                    <th>Scheduled Place </th>
                                                </tr>
                                                </thead>

                                                <tbody>

                                                </tbody>
                                            </table>
                                            
                                        {{--modal body end--}}
                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #modal-view-for-closed-blotter -->
                        <div class="modal fade" id="ViewClosedModal">
                            <div class="modal-dialog" style="max-width: 50%">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #f59c1a">
                                        <h4 class="modal-title" style="color: white">View Blotter Details</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                    </div>
                                    <div class="modal-body">
                                        {{--modal body start--}}
                                        <h2 id="ViewClosedBlotterCode" align="center"></h2>
                                            <label style="display: block; text-align: center">Blotter Code</label>
                                        <hr>
                                            <label>Blotter Subject</label>
                                            <h4 id="ViewClosedBlotterSub"></h4>
                                        <br>
                                            <label>Complain Date</label>
                                            <h4 id="ViewClosedComplainDate"></h4>
                                        <br>
                                            <label>Closed Date</label>
                                            <h4 id="ViewClosedDate"></h4>
                                        <br>
                                            <label>Complainant Name</label>
                                            <h4 id="ViewClosedComplainantName"></h4>
                                        <br>
                                            <label>Accused Resident</label>
                                            <h4 id="ViewClosedAccusedResident"></h4>
                                        <br>
                                            <label>Incident Date</label>
                                            <h4 id="ViewClosedIncidentnDate"></h4>
                                        <br>
                                            <label>Incident Area</label>
                                            <h4 id="ViewClosedIncidentArea"></h4>
                                        <br>
                                            <label>Complain Statement</label>
                                            <h4 id="ViewClosedComplainStatement"></h4>
                                        <br>
                                            <label>Resolution</label>
                                            <h4 id="ViewClosedResolution"></h4>

                                        {{--modal body end--}}
                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- #modal-add -->
                        <div class="modal fade" id="AddModal">
                            <div class="modal-dialog" style="max-width: 30%">
                                <form id="AddForm" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#6C9738;">
                                            <h4 class="modal-title" style="color: white">File a Complain</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                        </div>
                                        <div class="modal-body">
                                            {{--modal body start--}}
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Incident Date</label> <span id='reqcatnameadd'></span>
                                                    <input type="text" id="add_incident_date" name="add_incident_date" class="form-control"  placeholder="yy-mm-dd" required="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Incident Area</label> <span id='reqIncidentAreaAdd'></span>
                                                    <input id="add_incident_area" name="add_incident_area" class="form-control" required="true" placeholder="Where the case happened" >
                                                </div>
                                            </div>                                            
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Complainant</label> <span id='reqComplainantNameAdd'></span>
                                                    <input id="add_complainant_name" name="Aadd_complainant_nameddCatDesc" class="form-control" required="true" placeholder="Name of the complainant eg. complainant1 (Alias),complainant2 (Alias)," >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Respondent</label> 
                                                    <input  id="add_resident_id" name="add_resident_id" class="form-control" placeholder="Respondent Name">
                                                                                                         
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Blotter Subject</label> <span id='reqBlotterSubjectAdd'></span>
                                                    <input id="add_blotter_subject_id" name="add_blotter_subject_id" class="form-control" placeholder="Blotter subject">
                                                        
                                                
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Complaint Statement</label> <span id='reqComplainStatementAdd'></span>
                                                    <textarea id="add_complain_statement" name="add_complain_statement" class="form-control" rows="2"></textarea>
                                                </div>                                            
                                            </div>
                                            {{--modal body end--}}
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                            <a id="AddBTN" href="javascript:;" class="btn btn-lime">Add</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- #modal-hearing -->
                        <div class="modal fade" id="HearingModal">
                            <div class="modal-dialog" style="max-width: 40%">
                                <form id="schedHearingForm" method="POST">
                                    @csrf

                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#F5CD30;">
                                            <h4 class="modal-title" style="color: white">Schedule Patawag</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                        </div>
                                        <div class="modal-body">
                                       {{--modal body start--}}
                                            <label class="form-label hide">Blotter ID</label>
                                                <input type="text" id="EditBlotterIDH" name="EditBlotterIDH" type="text" class="form-control hide"/>

                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Scheduled Date</label> <span id='reqScheduledDateAdd'></span>
                                                            <input type="datetime-local" id="AddScheduledDate" name="AddScheduledDate" class="form-control" required="true" placeholder="yyyy-mm-dd">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Scheduled Place</label> <span id='reqScheduledPlaceAdd'></span>
                                                    <input id="addScheduledPlace" name="addScheduledPlace" class="form-control" required="true" placeholder="Where the hearing will happen" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Patawag History</label>
                                                <table id="hearing-table" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th hidden>Patawag ID </th>
                                                        <th>Scheduled Date </th>
                                                        <th>Scheduled Time</th>
                                                        <th>Scheduled Place </th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        {{--modal body end--}}
                                        </div>
                                        <div class="modal-footer">
                                            <a id="CloseBTN" href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                           <!--  <a id="EditPatawagBTN" href="javascript:;" class="btn btn-success">Edit</a> -->
                                            <a id="ScheduleBTN" href="javascript:;" class="btn btn-yellow">Add Schedule</a>

                                          <!--   <a id="CancelBTN" href="javascript:;" class="btn btn-white">Cancel</a>
                                            <a id="SaveBTN" href="javascript:;" class="btn btn-lime">Save</a> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- #view-modal-hearing -->
                        <div class="modal fade" id="ViewHearingModal">
                            <div class="modal-dialog" style="max-width: 50%">
                                <form id="viewHearingForm" method="POST">
                                    @csrf

                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#F5CD30;">
                                            <h4 class="modal-title" style="color: white">Patawag History</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white">×</button>
                                        </div>
                                        <div class="modal-body">
                                       {{--modal body start--}}
                                            <label class="form-label hide">Blotter ID</label>
                                                <input type="text" id="EditBlotterIDH" name="EditBlotterIDH" type="text" class="form-control hide"/>

                                            <div class="col-lg-12">
                                               <!--  <label>Summon History</label> -->
                                                <table id="view-hearing-table" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th hidden>Patawag ID </th>
                                                        <th>Scheduled Date </th>
                                                        <th>Scheduled Time</th>
                                                        <th>Scheduled Place </th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        {{--modal body end--}}
                                        </div>
                                        <div class="modal-footer">
                                            <a id="CloseBTN" href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-10 -->
        </div>

        <!-- end row -->
    </div>

    <!-- end #content -->




@endsection