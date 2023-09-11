

<?php
// include_once("config.php");
// include_once("DbConnection.php");
@include 'config.php';


// Retrieve team data and calculate total scores
$sql = "SELECT team_name, average_single_round_score FROM elem_scores_averages";
$result = $conn->query($sql);

$teams = array();
while ($row = $result->fetch_assoc()) {
    $teams[] = $row;
}

// Calculate ranks based on total scores
usort($teams, function ($a, $b) {
    return $b['average_single_round_score'] - $a['average_single_round_score'];
});

$rank = 1;
foreach ($teams as &$team) {
    $team['rank'] = $rank++;
}

// Close the database connection
$conn->close();
?>


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
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
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
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/modal.css">
    <!-- form styling
        ============================================ -->
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
                        <li class="active" ><a href="dashboard.php" ><i class="fa fa-home"></i>Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#info"><i class="fa fa-list-alt"></i>Elementary School</a>
                        </li>
                        <li><a data-toggle="tab" href="#infor"><i class="fa fa-edit"></i>Middle School</a>
                        </li>
                        <li><a data-toggle="tab" href="#inform"><i class="fa fa-user-secret"></i>High School</a>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="info" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="round1.php">Round 1</a>
                                </li>
                                <li><a href="round2.php">Round 2</a>
                            </ul>
                        </div>
                        
                        <div id="infor" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="round1mid.php">Round 1</a>
                                </li>
                                <li><a href="round2mid.php">Round 2</a>
                                </li>
                               
                            </ul>
                        </div>

                        <div id="inform" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="round1mid.php">Round 1</a>
                                </li>
                                <li><a href="round2mid.php">Round 2</a>
                                </li>
                               
                            </ul>
                        </div>


            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <BR>
   
   <h2>Competition Dashboard</h2>
   <?php
@include 'config.php';

// SQL query to retrieve data from the players table
$sql = "SELECT * FROM players";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Team Name</th><th>Player One</th><th>Player Two</th></tr>";

    while ($row = $result->fetch_assoc()) {
    
        echo "<tr>";
        echo "<td>" . $row['team_name'] . "</td>";
        echo "<td>" . $row['player_one'] . "</td>";
        echo "<td>" . $row['player_two'] . "</td>";
        echo "</tr>";
    }
}
// Close the database connection
$conn->close();
?>
        <table>
<td>
<?php echo "<td>" . $row['team_name'] . "</td>"; ?>
    <tr></tr>
</td>

        </table>

    <!-- Add a section for displaying performance metrics here -->

    <!-- End Status area-->
    <script src="js/modal.js"></script>
    <!-- wow JS
        ============================================ -->
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
    <!-- sparkline JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
</body>

</html>