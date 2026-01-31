<?php
include("./conn.php");
$ID = $_GET['id'];

$HeaderData = "SELECT ph.id,ph.name,ph.date,ph.status,pt.Project_id,pt.task1,pt.taks1_file_path,pt.task2,pt.taks2_file_path,pt.taks3,pt.taks3_file_path FROM project_header ph INNER JOIN project_troiler pt ON ph.id=pt.Project_id WHERE ph.id='$ID';";
$result = $conn->query($HeaderData);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $date = $row["date"];
        $status = $row["status"];

        $task1 = $row["task1"];
        $taks1_file_path = $row["taks1_file_path"];
        $task2 = $row["task2"];
        $taks2_file_path = $row["taks2_file_path"];
        $taks3 = $row["taks3"];
        $taks3_file_path = $row["taks3_file_path"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="mt-3">
    <center><b><i>Project Create</i></b></center>
</div>
<br/>
<div class="container">
    <form action="update.php" method="post">
        <input 
            name="ID"
            type="hidden"
            value="<?php echo $ID; ?>"
        >
        <div class="row mt-4">
            <div class="col-md-4">
                <label><b>Project Name</b></label>
                <input 
                    class="form-control"
                    name="ProjectName"
                    placeholder="Enter The Project Name..."
                    value="<?php echo $name; ?>"
                >
            </div>
            <div class="col-md-4">
                <label><b>Project date</b></label>
                <input 
                    type="date"
                    class="form-control"
                    name="ProjectDate"
                    placeholder="Select The Project Date..."
                    value="<?php echo $date; ?>"
                >
            </div>
            <div class="col-md-4">
                <label><b>Project status</b></label>
                <select
                    class="form-select"
                    name="ProjectStatus"
                    value="<?php echo $status; ?>"
                >
                    <option hidden>Select The Project Status</option>
                    <option value="Active">Active</option>
                    <option value="InActive">InActive</option>
                </select>
            </div>
        </div>

        <hr/>
        <div class="mt-2">
            <b><i>Work Performed</i></b>
        </div>
        <div class="row mt-2">
            <div class="col-md-4"><b>Task 1</b></div>
            <div class="col-md-4">
                <textarea class="form-control" placeholder="Enter The Task1 here.." name="task1"><?php echo $task1; ?></textarea>
            </div>
            <div class="col-md-4">
                <a href="<?php echo $taks3_file_path; ?>">View Task 1 Image</a>
            </div>

            <div class="col-md-4 mt-2"><b>Task 2</b></div>
            <div class="col-md-4 mt-2">
                <textarea class="form-control" placeholder="Enter The Task2 here.." name="task2"><?php echo $task2; ?></textarea>
            </div>
            <div class="col-md-4 mt-2">
                <a href="<?php echo $taks3_file_path; ?>">View Task 2 Image</a>
            </div>
            
            <div class="col-md-4 mt-2"><b>Task 3</b></div>
            <div class="col-md-4 mt-2">
                <textarea class="form-control" placeholder="Enter The Task3 here.." name="task3"><?php echo $taks3; ?></textarea>
            </div>
            <div class="col-md-4 mt-2">
                <a href="<?php echo $taks3_file_path; ?>">View Task 3 Image</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <center>
                        <a href="./index.php" class="btn btn-sm btn-danger">Back</a>
                    &emsp;
                        <button name="submit" class="btn btn-sm btn-success">update Project</button>
                    </center>
                </div>
        </div>
    </form>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>