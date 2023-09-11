<?php
@include 'config.php';

if(isset($_POST['submit'])){

// Retrieve data from the form fields
$team_name = $_POST["team_name"];
$player_one = $_POST["player_one"];
$player_two = $_POST["player_two"];

// SQL query to insert data into the person table
$sql = "INSERT INTO players (team_name, player_one, player_two) VALUES ('$team_name', '$player_one', '$player_two')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Team and Referee Information</title>
</head>
<body>
    <h2>Team and Referee Information</h2>
    <form action="" method="POST">
        <label for="team_name">Team Name:</label>
        <input type="text" id="team_name" name="team_name" required><br><br>

        <label for="player_one">Player 1:</label>
        <input type="text" id="player_one" name="player_one" required><br><br>

        <label for="player_two">Player 2:</label>
        <input type="text" id="player_two" name="player_two" required><br><br>

        <input type="submit" value="Submit" name ="submit">
    </form>
</body>
</html>
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
