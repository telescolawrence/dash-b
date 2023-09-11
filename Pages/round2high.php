

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Afribot Robotics</title>
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
                        <a href="#"><strong><i class="fa fa-laptop" style="color:white; font-size: 24px;"> Afribot Robotics</i></strong> </a>
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
                    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-edit"></i>Elementary School</a>
                        <ul class="dropdown-menu">
                            <li><a href="round1mid.php">Round 1</a></li>
                            <li><a href="round2mid.php">Round 2</a></li>
                        </ul>
                    </li>
                   
                   
                   
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-edit"></i>Middle School</a>
                        <ul class="dropdown-menu">
                            <li><a href="round1mid.php">Round 1</a></li>
                            <li><a href="round2mid.php">Round 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user-secret"></i>High School</a>
                        <ul class="dropdown-menu">
                        <li><a href="round1high.php">Round 1</a></li>
                            <li><a href="round2high.php">Round 2</a></li>
                        </ul>
                    </li>
                </ul>
                
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
                            <h2>Middle School scores Table</h2>
                            <h3>Round 2</h3>
                        </div>
                        <button style="margin-left: 94%; margin-top: -7%" type="button" class="btn btn-danger waves-effect btn-sm" data-toggle="modal" data-target="#add"><i class ="fa fa-plus"></i><a href="input6.php">Add</a></button>
                            <div class="modal fade in" id="add" role="dialog">
                                    
                            </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        
                                    <th>Team Name</th>
                                        <th>Player 1</th>
                                        <th>Player 2</th>
                                       <!-- <th>.</th> -->
                                        <!-- <th>.</th> -->
                                        <!-- <th>.</th> -->
                                        <th style="width: 9%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                     
                                        <td><u>Mombasa</u></td>
                                        <td>Musa</td>
                                        <td>Asha</td>
                                        <!-- <td>.</td>
                                        <td><small>.</small></td>
                                        <td>.</td> -->
                                        <td><button type="button" class="btn btn-danger waves-effect btn-sm" ><i class ="fa fa-trash"></i></button> 
                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td><u>Nakuru</u></td>
                                        <td>Rose</td>
                                        <td>Peter</td>
                                        <!-- <td>.</td>
                                        <td><small>.</small></td>
                                        <td>.</td> -->
                                        <td><button type="button" class="btn btn-danger waves-effect btn-sm" ><i class ="fa fa-trash"></i></button> 
                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                      
                                    <th>Team Name</th>
                                        <th>Player 1</th>
                                        <th>Player 2</th>
                                        <!-- <th>.</th>
                                        <th>.</th>
                                        <th>.</th> -->
                                        <th style="width: 9%"></th>
                                    </tr>
                                </tfoot>
                            </table>  
                            <div class="modal fade in" id="edit" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        
                                    
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
    <!-- <script src="js/tawk-chat.js"></script> -->
</body>

</html>