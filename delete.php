<?php
include("./conn.php");

$ID = $_GET['id'];

$Header_Delete_SQL = "DELETE FROM project_header WHERE id='$ID'";
if ($conn->query($Header_Delete_SQL) === TRUE) {
    //echo "project deleted successfully";
} else {
    echo "Error: " . $Header_Delete_SQL . "<br>" . $conn->error;
}

$Troiler_Delete_SQL = "DELETE FROM project_troiler WHERE Project_id='$ID'";
if ($conn->query($Troiler_Delete_SQL) === TRUE) {
    //echo "project deleted successfully";
} else {
    echo "Error: " . $Troiler_Delete_SQL . "<br>" . $conn->error;
}


header("Location: ./index.php"); 

?>