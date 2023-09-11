<?php
@include 'config.php';

if(isset($_POST['submit'])){

// Retrieve data from the form fields
$team_name = $_POST["team_name"];
$referee_name = $_POST["referee_name"];

// SQL query to insert data into the person table
$sql = "INSERT INTO person (team_name, referee_name) VALUES ('$team_name', '$referee_name')";

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

        <label for="referee_name">Referee Name:</label>
        <input type="text" id="referee_name" name="referee_name" required><br><br>

        <input type="submit" value="Submit" name ="submit">
    </form>
</body>
</html>
