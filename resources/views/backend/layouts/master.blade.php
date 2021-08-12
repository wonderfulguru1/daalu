<html>

<head>
     <base href="{{URL::to('/')}}" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard." name="description">
        <link href="assets/img/favicon.ico" type="image/x-icon" rel="icon"/><link href="assets/img/favicon.ico" type="image/x-icon" rel="shortcut icon"/>  
    <title>Daalu.com.ng</title> 

    <link href="assets/plugins/iconfonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon">
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/dark.css" rel="stylesheet">
    <link href="assets/css/skin-modes.css" rel="stylesheet">
    <link href="assets/css/animated.css" rel="stylesheet">
    <link href="assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/responsive.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.css">
    <link href="assets/plugins/modal-datepicker/datepicker.css" rel="stylesheet">
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
    <style type="text/css">
       .icon1>.feather  {
            margin-top: auto!important;
            padding-top: 15px;
        }

            .hor-menu .horizontalMenu>.horizontalMenu-list>li>a.active, .hor-menu .horizontalMenu>.horizontalMenu-list>li>a:hover {
            color: #ebeff8;
            box-shadow: none;
        }

        .horizontal-main.hor-menu {
            background: #e42821;
            border-bottom: 1px solid #e42821;
            box-shadow: 0 6px 18px rgb(196 205 224 / 10%);
            padding: .75rem;
        }

        .horizontalMenu>.horizontalMenu-list>li>a {
            display: block;
            padding: 8px 20px 8px 20px;
            text-decoration: none;
            position: relative;
            color: #000000;
            font-weight: 500;
            font-size: 14px;
            margin: 0 2px;
            vertical-align: middle;
        }

        .text-danger {
            color: #fe7f00!important;
        }

        .text-primary {
            color: #0dcd94!important;
        }
        .hidden{
            display: none
        }
    </style>
</head>

<body>
    <div class="horizontalMenucontainer">
 
        <div id="global-loader" style="display: none;"> <img src="assets/images/svgs/loader.svg" alt="loader">
        </div>
        <div class="page">
            <div class="page-main">
                 @include('backend.layouts.partials.header')
                <div class="main-content">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                <!-- end app-content-->
            </div>
            <!--Footer-->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center"> Copyright © {{date('Y')}} <a href="#">tvio</a>. All rights reserved. </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer-->
            <!--Sidebar-right-->
            <div class="sidebar sidebar-right sidebar-animate ps ps--active-y">
                <div class="card-header border-bottom pb-5">
                    <h4 class="card-title">Notifications </h4>
                    <div class="card-options"> <a href="#" class="btn btn-sm btn-icon btn-light text-primary" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="feather feather-x"></i>
                        </a> </div>
                </div>
                <div class="">
                    <div class="list-group-item  align-items-center border-0">
                        <div class="d-flex"> <span class="avatar avatar-lg brround mr-3" style="background-image: url(assets/images/users/4.jpg)"></span>
                            <div class="mt-1"> <a href="#" class="font-weight-semibold fs-16">Liam <span
                                        class="text-muted font-weight-normal">Sent Message</span></a> <span class="clearfix"></span> <span class="text-muted fs-13 ml-auto"><i
                                        class="mdi mdi-clock text-muted mr-1"></i>30 mins ago</span> </div>
                            <div class="ml-auto">
                                <a href="" class="mr-0 option-dots" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="feather feather-more-horizontal"></span> </a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="#"><i class="feather feather-eye mr-2"></i>View</a></li>
                                    <li><a href="#"><i class="feather feather-plus-circle mr-2"></i>Add</a></li>
                                    <li><a href="#"><i class="feather feather-trash-2 mr-2"></i>Remove</a></li>
                                    <li><a href="#"><i class="feather feather-settings mr-2"></i>More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 880px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 785px;"></div>
                </div>
            </div>
            <!--/Sidebar-right-->
            <!--Clock-IN Modal -->
            <div class="modal fade" id="clockinmodal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><span class="feather feather-clock  mr-1"></span>Clock In</h5>
                            <button class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">×</span> </button>
                        </div>
                        <div class="modal-body">
                            <div class="countdowntimer"><span id="clocktimer" class="border-0 style size_md" style="background: transparent; color: rgb(49, 62, 106); border-color: transparent;">10:58:13</span>
                            </div>
                            <div class="form-group"> <label class="form-label">Note:</label> <textarea class="form-control" rows="3">Some text here...</textarea> </div>
                        </div>
                        <div class="modal-footer"> <button class="btn btn-outline-primary" data-dismiss="modal">Close</button> <button class="btn btn-primary">Clock In</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Clock-IN Modal  -->
            <!--Change password Modal -->
            <div class="modal fade" id="changepasswordnmodal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Password</h5> <button class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group"> <label class="form-label">New Password</label> <input type="password" class="form-control" placeholder="password" value=""> </div>
                            <div class="form-group"> <label class="form-label">Confirm New Password</label> <input type="password" class="form-control" placeholder="password" value=""> </div>
                        </div>
                        <div class="modal-footer"> <a href="#" class="btn btn-outline-primary" data-dismiss="modal">Close</a> <a href="#" class="btn btn-primary">Confirm</a> </div>
                    </div>
                </div>
            </div>
            <!-- End Change password Modal  -->
        </div>

            <script src="assets/plugins/jquery/jquery.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>

        <script src="assets/plugins/bootstrap/popper.min.js"></script>

        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

        <script src="assets/plugins/horizontal-menu/horizontal-menu.js"></script>

        <script src="assets/js/sticky.js"></script>

        <script src="assets/plugins/p-scrollbar/p-scrollbar.js"></script>

        <script src="assets/plugins/sidebar/sidebar.js"></script>

        <script src="assets/plugins/notify/js/notifIt.js"></script>

        <script src="assets/plugins/select2/select2.full.min.js"></script>

        <script src="assets/plugins/modal-datepicker/datepicker.js"></script>

        <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>

        <script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>

        <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>

        <script src="assets/plugins/datatable/responsive.bootstrap4.min.js"></script>

        <script src="assets/js/superadmin/superadmin-company.js"></script>

        <script src="assets/js/custom.js"></script>

        <script src="assets/switcher/js/switcher.js"></script>
        <script type="text/javascript">
            $('input[type="search"]').val('')
        </script>
    </div>
      <div class="overlay"></div>
</body>

</html>