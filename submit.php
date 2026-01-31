<?php
include("./conn.php");

if(isset($_POST['submit'])){
    $Name = $_POST['ProjectName'];
    $Date = $_POST['ProjectDate'];
    $Status = $_POST['ProjectStatus'];

    $Task1 = $_POST['task1'];
    $Task1uploadFilename = "uploads/".$_FILES["task1upload"]["name"];
    move_uploaded_file($_FILES["task1upload"]["tmp_name"], $Task1uploadFilename);

    $Task2 = $_POST['task2'];
    $Task2uploadFilename = "uploads/".$_FILES["task2upload"]["name"];
    move_uploaded_file($_FILES["task2upload"]["tmp_name"], $Task2uploadFilename);

    $Task3 = $_POST['task3'];
    $Task3uploadFilename = "uploads/".$_FILES["task3upload"]["name"];
    move_uploaded_file($_FILES["task3upload"]["tmp_name"], $Task3uploadFilename);

    $Header_SQL = "INSERT INTO `project_header`(`name`, `date`, `status`) VALUES ('$Name','$Date','$Status')";

    if ($conn->query($Header_SQL) === TRUE) {
        //echo "New project created successfully";
    } else {
        echo "Error: " . $Header_SQL . "<br>" . $conn->error;
    }

    $HeaderData = "SELECT * FROM `project_header` ORDER BY created_on DESC LIMIT 1";
    $result = $conn->query($HeaderData);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $HeaderID = $row["id"];
        }
    } else {
        $HeaderID = 1;
    }

    
    echo $Troiler_SQL = "INSERT INTO `project_troiler`(`Project_id`, `task1`, `taks1_file_path`, `task2`, `taks2_file_path`, `taks3`, `taks3_file_path`) VALUES ('$HeaderID', '$Task1', '$Task1uploadFilename', '$Task2', '$Task2uploadFilename', '$Task3', '$Task3uploadFilename' )";

    if ($conn->query($Troiler_SQL) === TRUE) {
        //echo "New project created successfully";
    } else {
        echo "Error: " . $Troiler_SQL . "<br>" . $conn->error;
    }

    header("Location: ./index.php"); 
}

?>