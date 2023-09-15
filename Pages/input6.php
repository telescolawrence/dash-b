
<?php

@include 'config.php';

if(isset($_POST['submit'])){
        // Retrieve data from the form fields
        $team_name = $_POST["team_name"];
        $group_name = $_POST["group_name"];
        $launching_points = intval($_POST["launching_points"]);
        $flight_path_points = intval($_POST["flight_path_points"]);
        $alliance_victory_points = intval($_POST["alliance_victory_points"]);
        $activate_alliance_system_points = intval($_POST["activate_alliance_system_points"]);
        $space_time_energy_transfer_points = intval($_POST["space_time_energy_transfer_points"]);
        $alliance_route_planning_points = intval($_POST["alliance_route_planning_points"]);
        $remaining_time_minutes = intval($_POST["remaining_time_minutes"]);
        $reset_deduction_points = intval($_POST["reset_deduction_points"]);
        // $single_round_score = intval($_POST["single_round_score"]); 
        // Calculate the total score based on the provided values
        $single_round_score = $launching_points + $flight_path_points + $alliance_victory_points +
                       $activate_alliance_system_points + $space_time_energy_transfer_points +
                       $alliance_route_planning_points + $remaining_time_minutes - $reset_deduction_points;
        
    
        // SQL query to insert data into the scores table
        $sql = "INSERT INTO high_scores_round2 (team_name, group_name, launching_points, flight_path_points, alliance_victory_points, 
                activate_alliance_system_points, space_time_energy_transfer_points, alliance_route_planning_points, 
                remaining_time_minutes, reset_deduction_points, single_round_score) 
                VALUES ('$team_name', '$group_name', $launching_points, $flight_path_points, $alliance_victory_points, 
                $activate_alliance_system_points, $space_time_energy_transfer_points, $alliance_route_planning_points, 
                $remaining_time_minutes, $reset_deduction_points, $single_round_score)";
    
        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Close the database connection
    $conn->close();
 //   header('location:login_form.php');
    
?>
<!DOCTYPE html>
<html>
<head>
   
    <style>
        /* Styles for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            width: 70%; /* Increase the width for larger forms */
            max-height: 80%; /* Add max-height for scroll bar */
            overflow-y: auto; /* Add a vertical scroll bar */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        /* Styles for the close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        /* Style for the form */
        form {
            padding: 20px;
        }
        .open{
            border-radius: 8px;
            background-color: purple; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;

        }
        .one {
        background-color: white; 
        color: black; 
        border: 2px solid black;
        width: 50%;
        /* margin-left: 200px;         */
        }

        .one:hover {
        background-color: purple;
        color: white;
        }
        .two {
        background-color: white; 
        color: black; 
        width: 50%;
        border: 2px solid black;
        /* margin-left: 200px; */
        }

        .two:hover {
        background-color: purple;
        color: white;
        }
        h3{
            /* margin-left: 400px; */
            line-height: 100px; /* Center vertically (adjust the value as needed) */
            color: black; /* Make the text purple */
            font-size: 40px;
        }
        h2{
            /* margin-left: 400px; */
            font-size: 30px;


        }
        .display{
            border-style: double;
            border-width: medium;
            border-radius: 12px;
            text-align: center;
            margin:200px;
            margin-bottom:0px;
            margin-top:110px;
            padding: 6px;
            height:400px;
            resize: both;
            overflow: auto;
            width: 200;
            background-color:  #43326c; /* For browsers that do not support gradients */
            background-image: linear-gradient(to left, purple,  black );
        }
    </style>
</head>
<body>
<div class="display">
        <h2>Score Input Form <br>Round 2 </h2>
        <h3>High School</h3>
        <button id="openModalBtn" class="open one">Open Form</button>
        <button class="open two"><a href="round2high.php">Back</a></button> 
    </div>
    <!-- The Modal -->
    <div id="scoreModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <form action="" method="post">
                <label for="team_name">Team Name:</label>
                <input type="text" id="team_name" name="team_name" required><br><br>
            
                <label for="group_name">Group Name:</label>
                <input type="text" id="group_name" name="group_name" required><br><br>
            
                <h3>Basic Task</h3>
                <label for="launching_points">Successful Launching (50 points):</label>
                <input type="number" id="launching_points" name="launching_points" min="0" required><br><br>
            
                <label for="flight_path_points">Flight Path (Out of 50 points):</label>
                <input type="number" id="flight_path_points" name="flight_path_points" min="0" required><br><br>
            
                <label for="alliance_victory_points">Alliance Victory Reunion (Out of 70 points):</label>
                <input type="number" id="alliance_victory_points" name="alliance_victory_points" min="0" required><br><br>
            
                <label for="activate_alliance_system_points">Activate the Alliance System (50 points):</label>
                <input type="number" id="activate_alliance_system_points" name="activate_alliance_system_points" min="0" required><br><br>
            
                <label for="space_time_energy_transfer_points">Space-Time Energy Transfer (Out of 20 points):</label>
                <input type="number" id="space_time_energy_transfer_points" name="space_time_energy_transfer_points" min="0" required><br><br>
            
                <h3>Additional Task</h3>
                <label for="alliance_route_planning_points">Alliance Route Planning (60 points):</label>
                <input type="number" id="alliance_route_planning_points" name="alliance_route_planning_points" min="0" required><br><br>
            
                <h3>Remaining Time</h3>
                <label for="remaining_time_minutes">Remaining Time (Seconds):</label>
                <input type="number" id="remaining_time_minutes" name="remaining_time_minutes" min="0" required><br><br>
            
                <h3>Reset Point Deduction</h3>
                <label for="reset_deduction_points">Reset Point Deduction (Up to 100 points):</label>
                <input type="number" id="reset_deduction_points" name="reset_deduction_points" min="0" required><br><br>

                <h3>Single round score:</h3>
                <label for="referee_name">Single round score:</label>
                <input type="number" id="single_round_score" name="single_round_score"><br><br>
            
                <h3>Total Score</h3>
                <label for="total_score">Total Score:</label>
                <input type="number" id="total_score" name="total_score" min="0"><br><br>
            
               
            
            
                <input type="submit" value="Submit Score"  name="submit">
                <br>
                <br>

            </form>
        </div>
    </div>

    <script>
        // Get references to modal elements and buttons
        var modal = document.getElementById("scoreModal");
        var openModalBtn = document.getElementById("openModalBtn");
        var closeModalBtn = document.getElementById("closeModalBtn");

        // Open the modal when the "Open Form" button is clicked
        openModalBtn.onclick = function() {
            modal.style.display = "block";
        }

        // Close the modal when the "X" button is clicked
        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        // Close the modal if the user clicks outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>


