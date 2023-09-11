
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
<!DOCTYPE html>
<html>
<head>
    <title>Competition Dashboard</title>
    <style>
        /* Add your CSS styles for the dashboard here */
    </style>
</head>
<body>
    <h2>Competition Dashboard</h2>
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Team Name</th>
                <th>Total Score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
                <tr>
                    <td><?php echo $team['rank']; ?></td>
                    <td><?php echo $team['team_name']; ?></td>
                    <td><?php echo $team['total_score']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Add a section for displaying performance metrics here -->

</body>
</html>
