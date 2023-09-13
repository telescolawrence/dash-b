<?php
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
?>





