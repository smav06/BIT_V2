<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Barangay IT | Installation Setup </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />




    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/default/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/default/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/default/theme/default.css')}}" rel="stylesheet" id="theme" />
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/logo/BPIS_Logo_dark.png')}}" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{asset('assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/parsley/src/parsley.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->



</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url({{asset('assets/img/login-bg/login-bg-14.jpg)')}}" data-id="login-cover-image"></div>
        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login " data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->

            <div class="login-header">


            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">


               <form action="" method="POST" name="form-wizard" id="Municipality_AddForm" class="form-control-with-bg">
                @csrf
                <!-- begin wizard -->
                <div id="wizard" style="width:1800px; margin-left: -700px;  margin-top: -200px; " >
                    <!-- begin wizard-step -->
                    <ul>
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-1">
                                <span class="number">1</span>
                                <span class="info text-ellipsis">
                                    Server Information
                                    <small class="text-ellipsis">Enter your host name,port,server username,server password</small>
                                </span>
                            </a>
                        </li>
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-2">
                                <span class="number">2</span>
                                <span class="info text-ellipsis">
                                    Enter Barangay Details
                                    <small class="text-ellipsis">Enter your barangay name, barangay seal,Land Area</small>
                                </span>
                            </a>
                        </li>

                        
                        <li class="col-md-3 col-sm-4 col-6">
                            <a href="#step-3">
                                <span class="number">3</span>
                                <span class="info text-ellipsis">
                                    Create User Account
                                    <small class="text-ellipsis">Complete Registration</small>
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
                                    <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Server Information</legend>
                                    <div class="col-md-6">
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Host Name<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" 
                                                id="host_name_txt"
                                                name="host_name_txt" placeholder="host name"   
                                                data-parsley-group="step-1" data-parsley-required="false" class="form-control"


                                                />
                                            </div>
                                        </div>
                                        <!-- end form-group -->

                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Port<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" 
                                                id="port_txt"
                                                name="port_txt" placeholder="port"
                                                
                                                data-parsley-group="step-1" data-parsley-required="false" class="form-control"


                                                />
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Server Username<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" 
                                                id="server_username_txt"
                                                name="server_username_txt" placeholder="username"
                                                
                                                data-parsley-group="step-1" data-parsley-required="false" class="form-control"


                                                />
                                            </div>
                                        </div>


                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Server Password<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" 
                                                id="server_password_txt"
                                                name="server_password_txt" placeholder="password"
                                                
                                                data-parsley-group="step-1"  class="form-control"


                                                />
                                            </div>
                                        </div>
                                        <!-- end form-group -->

                                        <!-- begin form-group -->
                                        <!-- <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Username <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" id="municipality_name_txt"
                                                name="municipality_name_txt" placeholder="E.G.:San Jose Del Monte" 

                                                data-parsley-group="step-1" data-parsley-required="false" class="form-control" 
                                                

                                                />
                                            </div>
                                        </div> -->
                                        <!-- end form-group -->
                                        
                                        <!-- begin form-group -->
                                        <!-- <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Password <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="password" name="municipal_seal_txt" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="false" class="form-control" />
                                            </div>
                                        </div> -->
                                        <!-- end form-group -->
                                        


                                        
                                        
                                        
                                        
                                        

                                        
                                        
                                        
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
                                    <!-- begin col-8 -->
                                    <div class="col-md-8 offset-md-2">
                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">enter your barangay information</legend>
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Municipality Name <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" name="municipality_name_txt" id="municipality_name_txt" placeholder="cuyab" class="form-control" data-parsley-group="step-2" data-parsley-required="false"  data-parsley-type="alphanum" />
                                            </div>
                                        </div>
                                        <!-- end form-group -->
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Barangay Name <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" name="barangay_name_txt" id="barangay_name_txt" placeholder="cuyab" class="form-control" data-parsley-group="step-2" data-parsley-required="false"  data-parsley-type="alphanum" />
                                            </div>
                                        </div>
                                        <!-- end form-group -->
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Barangay Seal <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="file"
                                                id="barangay_seal_txt"
                                                name="barangay_seal_txt" placeholder="Your barangay seal" class="form-control" data-parsley-group="step-2" data-parsley-required="false" 

                                                />
                                            </div>
                                        </div>
                                        <!-- end form-group -->

                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Land Area Size <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" 
                                                id="land_area_txt"
                                                name="land_area_txt" placeholder="0.00"  
                                                class="form-control" 
                                                data-parsley-group="step-2" data-parsley-required="false" 


                                                 />
                                            </div>
                                        </div>
                                        <!-- end form-group -->

                                        
                                        

                                      
                                </div>
                                <!-- end col-8 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- end step-3 -->
                    <!-- begin step-4 -->
                    <div id="step-3">
                        <!-- begin fieldset -->
                        <fieldset>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-8 -->
                                    <div class="col-md-8 offset-md-2">
                                        <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Select your login username and password</legend>
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Username <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" name="account_username_txt" placeholder="johnsmithy" class="form-control" data-parsley-group="step-2" data-parsley-required="false"  data-parsley-type="alphanum" />
                                            </div>
                                        </div>
                                        <!-- end form-group -->
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Pasword <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="password"
                                                id="account_password_txt"
                                                name="account_password_txt" placeholder="Your password" class="form-control" data-parsley-group="step-2" data-parsley-required="false" 

                                                data-parsley-equalto="#confirm_password_txt" />
                                            </div>
                                        </div>
                                        <!-- end form-group -->

                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Confirm Pasword <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="password" 
                                                id="confirm_password_txt"
                                                name="confirm_password_txt" placeholder="Confirmed password"  
                                                class="form-control" 
                                                data-parsley-group="step-2" data-parsley-required="false" 


                                                data-parsley-equalto="#account_password_txt" />
                                            </div>
                                        </div>
                                        <!-- end form-group -->

                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Email <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="email" name="email_txt" placeholder="Your email" class="form-control" data-parsley-group="step-2" data-parsley-required="false" />
                                            </div>
                                        </div>
                                        <!-- end form-group -->
                                        <!-- begin form-group -->
                                        <div class="form-group row m-b-10">
                                            <label class="col-md-3 col-form-label text-md-right">Secret Question <span class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="secret_question_txt" placeholder="Your secret question" class="form-control m-b-10" data-parsley-required="false" list="secret_question_list"  data-parsley-group="step-2"/>
                                                <datalist id="secret_question_list">
                                                  <option>What is your mother's maiden name?</option>

                                              </datalist>
                                          </div>
                                      </div>
                                      <!-- end form-group -->

                                      <!-- begin form-group -->
                                      <div class="form-group row m-b-10">
                                        <label class="col-md-3 col-form-label text-md-right">Secret Answer <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" name="secret_answer_txt" placeholder="Answer to your secret question"  data-parsley-group="step-2" class="form-control m-b-10" data-parsley-required="false" />
                                            
                                        </div>
                                    </div>
                                    <!-- end form-group -->
                                    <p><a href="javascript:;"  id="register_btn" style="margin-left:800px" class="btn btn-primary btn-lg">Register</a></p>
                                </div>

                                
                                <!-- end col-8 -->
                            </div>
                            <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                    </div>
                    <!-- end step-4 -->
                </div>
                <!-- end wizard-content -->
            </div>
            <!-- end wizard -->

        </form>
    </div>
    <!-- end login-content -->
</div>
<!-- end login -->



{{--<ul class="login-bg-list clearfix">--}}
    {{--<li ><a href="javascript:;" data-click="change-bg" data-img="{{asset('assets/img/login-bg/login-bg-17.jpg')}}" style="background-image: url({{asset('assets/img/login-bg/login-bg-17.jpg')}})"></a></li>--}}
    {{--<li><a href="javascript:;" data-click="change-bg" data-img="{{asset('assets/img/login-bg/login-bg-16.jpg')}}" style="background-image: url({{asset('assets/img/login-bg/login-bg-16.jpg')}})"></a></li>--}}
    {{--<li><a href="javascript:;" data-click="change-bg" data-img="{{asset('assets/img/login-bg/login-bg-15.jpg')}}" style="background-image: url({{asset('assets/img/login-bg/login-bg-15.jpg')}})"></a></li>--}}
    {{--<li class="active"><a href="javascript:;" data-click="change-bg" data-img="{{asset('assets/img/login-bg/login-bg-14.jpg')}}" style="background-image: url({{asset('assets/img/login-bg/login-bg-14.jpg')}})"></a></li>--}}
    {{--<li><a href="javascript:;" data-click="change-bg" data-img="{{asset('assets/img/login-bg/login-bg-13.jpg')}}" style="background-image: url({{asset('assets/img/login-bg/login-bg-13.jpg')}})"></a></li>--}}
    {{--<li><a href="javascript:;" data-click="change-bg" data-img="{{asset('assets/img/login-bg/login-bg-12.jpg')}}" style="background-image: url({{asset('assets/img/login-bg/login-bg-12.jpg')}})"></a></li>--}}
{{--</ul>--}}


</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('assets/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js')}}"></script>

<!--[if lt IE 9]>
<script src="{{asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{asset('assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->

<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('assets/js/theme/default.min.js')}}"></script>
<script src="{{asset('assets/js/apps.min.js')}}"></script>
<!-- ================== END BASE JS ================== -->


<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/parsley/dist/parsley.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets/js/demo/form-wizards-validation.demo.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->



<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>
{{--Modals--}}
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/demo/ui-modal-notification.demo.min.js')}}"></script>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {
        App.init();
        
        FormWizardValidation.init();


        





        {{--WIZARD FORM SUBMIT FUNCTION--}}


        $("#register_btn").click(function(e){


                e.preventDefault();



            // var fd=new FormData();

           
            // fd.append('host_name_txt',$("input[name='host_name_txt']").val());
            // fd.append('port_txt',$("input[name='port_txt']").val());
            // fd.append('server_username_txt',$("input[name='server_username_txt']").val());
            // fd.append('server_password_txt',$("input[name='server_password_txt']").val());

            
            

            // fd.append('_token',"{{csrf_token()}}");
            
            
            $.ajax({
                        url:"{{route('Connect_DB')}}",
                        type:'post',                         
                        data:{'host_name_txt':$("input[name='host_name_txt']").val() 
                               ,'port_txt':$("input[name='port_txt']").val()
                               ,'server_username_txt':$("input[name='server_username_txt']").val()
                               ,'server_password_txt':$("input[name='server_password_txt']").val()
                               ,'_token':'{{csrf_token()}}'},
                        
                        success:function(data)
                        {   
                            
                            var df = new FormData();

                            df.append('account_username_txt',$("input[name='account_username_txt']").val());
                            df.append('account_password_txt',$("input[name='account_password_txt']").val());
                            df.append('email_txt',$("input[name='email_txt']").val());
                            df.append('secret_question_txt',$("input[name='secret_question_txt']").val());
                            df.append('secret_answer_txt',$("input[name='secret_answer_txt']").val());

                            df.append('municipality_name_txt',$("input[name='municipality_name_txt']").val());
                            df.append('barangay_name_txt',$("input[name='barangay_name_txt']").val());
                            df.append('barangay_seal_txt',$("input[name='barangay_seal_txt']")[0].files[0]);
                            df.append('land_area_txt',$("input[name='land_area_txt']").val());
                            df.append('_token',"{{csrf_token()}}");



                            $.ajax({
                                        url:"{{route('Add_Barangay_Account')}}",
                                        type:'post',                           
                                        processData:false,
                                        contentType:false,                                     
                                        data:df,       
                                        success:function(data)
                                        {   
                                            alert('success')

                                        },
                                    


                                    });



                        },
                    


                    });


            // if($("#step-3").is(':visible')){
            //    var password= $("input[name='account_password_txt']").val(); 
            //    if(password.length >= 8 && password.length <= 20)
            //    {

            //       alert('Password must be 8 to 20 characters.');

            //   }
            //   else
            //   {

            //     $.ajax({
            //         url:"{{ route("MunicipalityStore") }}",
            //         type:'post',                         
            //         data:fd,
            //         async:false,
            //         success:function(data)
            //         {   
            //             if(data=='error')
            //             {
            //                 alert('Email is already taken!');

            //             }

            //         },
            //         processData:false,
            //         contentType:false,


            //     });

            // }



            // $(".sw-btn-prev").attr('disabled','disabled');
            // }


            })


        

    });


</script>
</body>
</html>
