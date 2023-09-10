<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shipping and Logistics System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">

    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-color: #dde3de">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area" style="background-color: #d9534f">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><strong><i class="fa fa-laptop" style="color:white; font-size: 24px;"> Shipping and Logistics System</i></strong> </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                           
                            <li style="margin-left: 70%" class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2><i class="notika-icon notika-support"></i> Emanuel Sensya</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                       <a href="../index.php"> <button class="btn btn-danger btn-sm" style="width: 100%"><i class="fa fa-sign-out"></i>Log out</button></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="dashboard.php" ><i class="fa fa-home"></i>Dashboard</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#info"><i class="fa fa-list-alt"></i>Information</a>
                        </li>
                        <li><a  href="shippingtransaction.php"><i class="fa fa-edit"></i>Shipping Transaction</a>
                        </li>
                        <li><a  href="usermanagement.php"><i class="fa fa-user-secret"></i>User Management</a>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="info" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li class="active"><a href="driverinfo.php" style="color: red"><b><u>Driver</u></b></a>
                                </li>
                                <li ><a href="customerinfo.php">Customer</a>
                                </li>
                                <li><a href="shipperinfo.php">Shipper</a>
                                </li>
                                <li><a href="vehicleinfo.php">Vehicle</a>
                                </li>
                            </ul>
                        </div>
                        <div id="driver" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="driverreport.php">Accomplishment Report</a>
                                </li>
                                <li><a href="driverreportdetails.php">Accomplishment Report Details</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->

    <div class="data-table-area">
        <div class="container">
            <div class="row" style="margin-top: -2.5%">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Driver Information Table</h2>
                        </div>
                        <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class ="fa fa-plus"></i> Add</button>
                            <div class="modal fade in" id="add" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <form>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 align ="center">Add Driver</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-element-list">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-motorcycle"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Enter Driver Name" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-map-envelope"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Enter Email Address" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                     <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="nk-int-st"><p style="margin-top: -9%; font-size: 10px">Date of Birth.</p>
                                                                    <input class="form-control" placeholder="Date of Birth" type="date" style="margin-top: -10%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4" style="margin-top: .9%">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Contact Number" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-map"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="City" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-code"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Zip Code" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm- col-xs-4" style="margin-left: 3%">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-image"></i>
                                                                </div>
                                                                <div class="nk-int-st"><p style="margin-top: -5%; font-size: 10px">Select Profile Image.</p>
                                                                    <input style="margin-top: -7%"  placeholder="" type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="margin-right: 72%">Close</button>
                                                 <button type="submit" class="btn btn-danger waves-effect">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:10%">Image</th>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Email Address</th>
                                        <th>City</th>
                                        <th>Zip Code</th>
                                        <th>Date of Birth</th>
                                        <th style="width: 9%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/avatar.png" width="40px" class="img-circle" alt="User Image"></td>
                                        <td>Jhon Vincent</td>
                                        <td><i>+6399845676</i></td>
                                        <td>Ktb 564 St. Jahan</td>
                                        <td>Sagay City</td>
                                        <td><small>6122</small></td>
                                        <td>March 31, 1983</td>
                                        <td><button type="button" class="btn btn-info waves-effect btn-sm"  data-toggle="modal" data-target="#edit"><i class ="fa fa-pencil"></i></button> 
                        <button type="button" class="btn btn-danger waves-effect btn-sm" ><i class ="fa fa-trash"></i></button> 
                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/avatar2.png" width="40px" class="img-circle" alt="User Image"></td>
                                        <td>Jhon Vincent</td>
                                        <td><i>+6399845676</i></td>
                                        <td>Ktb 564 St. Jahan</td>
                                        <td>Sagay City</td>
                                        <td><small>6122</small></td>
                                        <td>March 31, 1983</td>
                                        <td><button type="button" class="btn btn-info waves-effect btn-sm"  data-toggle="modal" data-target="#edit"><i class ="fa fa-pencil"></i></button> 
                        <button type="button" class="btn btn-danger waves-effect btn-sm" ><i class ="fa fa-trash"></i></button> 
                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Email Address</th>
                                        <th>City</th>
                                        <th>Zip Code</th>
                                        <th>Date of Birth</th>
                                        <th ></th>
                                    </tr>
                                </tfoot>
                            </table>  
                            <div class="modal fade in" id="edit" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <form>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 align="center">Edit Driver</h2>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-element-list">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-motorcycle"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Enter Driver Name" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-map-envelope"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Enter Email Address" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                     <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <div class="nk-int-st"><p style="margin-top: -9%; font-size: 10px">Date of Birth.</p>
                                                                    <input class="form-control" placeholder="Date of Birth" type="date" style="margin-top: -10%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Contact Number" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-map"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="City" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-4 col-sm- col-xs-4">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-code"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input class="form-control" placeholder="Zip Code" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm- col-xs-4" style="margin-left: 3%">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <i class="fa fa-image"></i>
                                                                </div>
                                                                <div class="nk-int-st"><p style="margin-top: -5%; font-size: 10px">Select Profile Image.</p>
                                                                    <input style="margin-top: -7%"  placeholder="" type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="margin-right: 72%">Close</button>
                                                 <button type="submit" class="btn btn-danger waves-effect">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
        ============================================ -->
   <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>        
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>

    <script src="js/todo/jquery.todo.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>