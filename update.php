<?php
include("./conn.php");

if(isset($_POST['submit'])){
    $ID = $_POST['ID'];
    $Name = $_POST['ProjectName'];
    $Date = $_POST['ProjectDate'];
    $Status = $_POST['ProjectStatus'];

    $Task1 = $_POST['task1'];
    $Task2 = $_POST['task2'];
    $Task3 = $_POST['task3'];

    $Header_SQL = "UPDATE `project_header` SET `name`='$Name',`date`='$Date',`status`='$Status' WHERE id='$ID'";

    if ($conn->query($Header_SQL) === TRUE) {
    } else {
        echo "Error: " . $Header_SQL . "<br>" . $conn->error;
    }
    
    $Troiler_SQL = "UPDATE `project_troiler` SET `task1`='$Task1',`task2`='$Task2',`taks3`='$Task3' WHERE Project_id='$ID'";

    if ($conn->query($Troiler_SQL) === TRUE) {
    } else {
        echo "Error: " . $Troiler_SQL . "<br>" . $conn->error;
    }

    header("Location: ./index.php"); 
}

?>