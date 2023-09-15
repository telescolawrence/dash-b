<?php
@include 'config.php';
// CODE TO DISPLAY ELEMENTARY RESULTS
$sqlRound1 = "SELECT team_name, single_round_score AS elem_score_round1 FROM elem_scores_round1";

// SQL query to retrieve scores from round 2
$sqlRound2 = "SELECT team_name, single_round_score AS elem_score_round2 FROM elem_scores_round2";

$resultRound1 = $conn->query($sqlRound1);
$resultRound2 = $conn->query($sqlRound2);

// Fetch data and store it in associative arrays
$scoresRound1 = array();
while ($row = $resultRound1->fetch_assoc()) {
    $scoresRound1[$row['team_name']] = $row['elem_score_round1'];
}

$scoresRound2 = array();
while ($row = $resultRound2->fetch_assoc()) {
    $scoresRound2[$row['team_name']] = $row['elem_score_round2'];
}


// Calculate average scores for teams with the same name
$averageScores = array();

foreach ($scoresRound1 as $teamName => $scoreRound1) {
    if (isset($scoresRound2[$teamName])) {
        // Team exists in both rounds, calculate the average
        $averageScore = (floatval($scoreRound1) + floatval($scoresRound2[$teamName])) / 2;

        // $averageScore = ($scoreRound1 + $scoresRound2[$teamName]) / 2;
        $averageScores[$teamName] = $averageScore;
    }
}







// CODE TO DISPLAY MIDDLE SCHOOL RESULTS
$sqlmidRound1 = "SELECT team_name, single_round_score AS middle_score_round1 FROM    middle_scores_round1";

// SQL query to retrieve scores from round 2
$sqlmidRound2 = "SELECT team_name, single_round_score AS middle_score_round2 FROM middle_scores_round2";

$midresultRound1 = $conn->query($sqlmidRound1);
$midresultRound2 = $conn->query($sqlmidRound2);

// Fetch data and store it in associative arrays
$scoresmidRound1 = array();
while ($row = $midresultRound1->fetch_assoc()) {
    $scoresmidRound1[$row['team_name']] = $row['mid_score_round1'];
}

$scoresmidRound2 = array();
while ($row = $midresultRound2->fetch_assoc()) {
    $scoresmidRound2[$row['team_name']] = $row['mid_score_round2'];
}


// Calculate average scores for teams with the same name
$midaverageScores = array();

foreach ($scoresmidRound1 as $teamName => $midscoreRound1) {
    if (isset($scoresmidRound2[$teamName])) {
        // Team exists in both rounds, calculate the average
        $midaverageScore = (floatval($midscoreRound1) + floatval($scoresmidRound2[$teamName])) / 2;

        // $midaverageScore = ($midscoreRound1 + $scoresmidRound2[$teamName]) / 2;
        $midaverageScores[$teamName] = $midaverageScore;
    }
}
// CODE TO DISPLAY HIGH SCHOOL RESULTS

$sqlhighRound1 = "SELECT team_name, single_round_score AS high_score_round1 FROM    high_scores_round1";

// SQL query to retrieve scores from round 2
$sqlhighRound2 = "SELECT team_name, single_round_score AS high_score_round2 FROM high_scores_round2";

$highresultRound1 = $conn->query($sqlhighRound1);
$highresultRound2 = $conn->query($sqlhighRound2);

// Fetch data and store it in associative arrays
$scoreshighRound1 = array();
while ($row = $highresultRound1->fetch_assoc()) {
    $scoreshighRound1[$row['team_name']] = $row['high_score_round1'];
}

$scoreshighRound2 = array();
while ($row = $highresultRound2->fetch_assoc()) {
    $scoreshighRound2[$row['team_name']] = $row['high_score_round2'];
}


// Calculate average scores for teams with the same name
$highaverageScores = array();

foreach ($scoreshighRound1 as $teamName => $highscoreRound1) {
    if (isset($scoreshighRound2[$teamName])) {
        // Team exists in both rounds, calculate the average
        $highaverageScore = (floatval($highscoreRound1) + floatval($scoreshighRound2[$teamName])) / 2;

        // $highaverageScore = ($highscoreRound1 + $scoreshighRound2[$teamName]) / 2;
        $highaverageScores[$teamName] = $highaverageScore;
    }
}




// elementary scores
$sql = "SELECT * FROM elem_scores_round1";

// Execute the query
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Document</title>




    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        color: white; /* Set text color to white */
    }

    th {
        background-color: #333; /* Set background color for header */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .elementary-table{
        padding: 8px;
    }
</style>

</head>

<body>
    <div class="header">
        <img src="afri1.jpeg" alt="loading">
    </div>

<div class="body">

 
    <div class="right" >
        <div class="right-top">

        </div>

        <div class="right-middle" >
            <div class="right-middle-one">


            </div>
            <div class="right-middle-two" >


            </div>
            <div  class="right-middle-three">


            </div>
        </div>

        <div class="right-bottom">

        </div>

    </div>

    <div class="middle">
        <div class="middle-top" >
            <h3>Leaderboard</h3>
             <!-- Table Titles -->
        <h4 id="tableTitle1">Elementary School</h4>
        <h4 id="tableTitle2" style="display: none;">Middle School</h4>
        <h4 id="tableTitle3" style="display: none;">High School</h4>

            <table border="1" id="elem_results">
    
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Average Score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($averageScores as $teamName => $averageScore): ?>
                <tr>
                    <td><?php echo $teamName; ?></td>
                    <td><?php echo $averageScore; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
   
    <table border="1" id="mid_results" style="display: none;">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Average Score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($midaverageScores as $teamName => $midaverageScore): ?>
                <tr>
                    <td><?php echo $teamName; ?></td>
                    <td><?php echo $midaverageScore; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table border="1" id="high_results" style="display: none;">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Average Score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($highaverageScores as $teamName => $highaverageScore): ?>
                <tr>
                    <td><?php echo $teamName; ?></td>
                    <td><?php echo $highaverageScore; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>




        </div>

        <div class="middle-bottom">



        </div>
    </div >
    <div class="left" >
        <div class="left-top">
        <table border="1" class="elementary-table">
        <thead>
            <tr>
                <th>Team Name</th>
                <!-- <th>Group Name</th> -->
                <th>Launching Points</th>
                <th>Flight Path Points</th>
                <th>Alliance victory Points</th>
                <th>Acticate Alliance System points</th>
                <th>Space time energy transfer</th>
                <th>Alliance route planning</th>
                <th>round score</th>
                <!-- Add more table headers for other columns -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                // Loop through each row of data
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    // echo "<td>" . $row["team_name"] . "</td>";
                    echo "<td>" . $row["group_name"] . "</td>";
                    echo "<td>" . $row["launching_points"] . "</td>";
                    echo "<td>" . $row["flight_path_points"] . "</td>";
                    echo "<td>" . $row["alliance_victory_points"] . "</td>";
                    echo "<td>" . $row["activate_alliance_system_points"] . "</td>";
                    echo "<td>" . $row["space_time_energy_transfer_points"] . "</td>";
                    echo "<td>" . $row["alliance_route_planning_points"] . "</td>";
                    echo "<td>" . $row["single_round_score"] . "</td>";
                    // Add more table cells for other columns as needed
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data available</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
        </div>
        <div class="left-middle">

        </div>
        <div class="left-bottom" >
            <div class="left-bottom-one">
                <h4>Elementary School</h4>

            </div>
            <div class="left-bottom-two" >
                <h4>Middle School</h4>

            </div>
            <div  class="left-bottom-three">
                <h4>High School</h4>

            </div>
        </div>

    </div>
</div>
</body>
<script>
   // Function to toggle table visibility and titles
function toggleTablesAndTitles() {
    var elemTable = document.getElementById("elem_results");
    var middleTable = document.getElementById("mid_results");
    var highTable = document.getElementById("high_results");

    var elemTitle = document.getElementById("tableTitle1");
    var middleTitle = document.getElementById("tableTitle2");
    var highTitle = document.getElementById("tableTitle3");

    if (elemTable.style.display === "table") {
        elemTable.style.display = "none";
        middleTable.style.display = "table";

        elemTitle.style.display = "none";
        middleTitle.style.display = "block";
    } else if (middleTable.style.display === "table") {
        middleTable.style.display = "none";
        highTable.style.display = "table";

        middleTitle.style.display = "none";
        highTitle.style.display = "block";
    } else {
        highTable.style.display = "none";
        elemTable.style.display = "table";

        highTitle.style.display = "none";
        elemTitle.style.display = "block";
    }
}

// Set the interval to switch tables and titles every 5 seconds (adjust as needed)
setInterval(toggleTablesAndTitles, 5000); // Switch every 5 seconds (5000 milliseconds)

</script>
</html>