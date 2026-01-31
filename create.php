<?php
include("./conn.php");
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
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <div class="row mt-4">
            <div class="col-md-4">
                <label><b>Project Name</b></label>
                <input 
                    class="form-control"
                    name="ProjectName"
                    placeholder="Enter The Project Name..."
                    required
                >
            </div>
            <div class="col-md-4">
                <label><b>Project date</b></label>
                <input 
                    type="date"
                    class="form-control"
                    name="ProjectDate"
                    placeholder="Select The Project Date..."
                    required
                >
            </div>
            <div class="col-md-4">
                <label><b>Project status</b></label>
                <select
                    class="form-select"
                    name="ProjectStatus"
                    required
                >
                    <option hidden>Select The Project Status</option>
                    <option value="Active">Active</option>
                    <option value="InActive">InActive</option>
                </select>
            </div>
            <!-- <div class="col-md-3">
                <br/>
                <button class="btn btn-sm btn-success">Create New Project</button>
            </div> -->
        </div>

        <hr/>
        <div class="mt-2">
            <b><i>Work Performed</i></b>
        </div>
        <div class="row mt-2">
            <div class="col-md-4"><b>Task 1</b></div>
            <div class="col-md-4">
                <textarea 
                    class="form-control"
                    placeholder="Enter The Task1 here.."
                    name="task1"
                    required
                ></textarea>
            </div>
            <div class="col-md-4">
                <input type="file" class="form-coltrol" name="task1upload" required>
            </div>

            <div class="col-md-4 mt-2"><b>Task 2</b></div>
            <div class="col-md-4 mt-2">
                <textarea 
                    class="form-control"
                    placeholder="Enter The Task2 here.."
                    name="task2"
                    required
                ></textarea>
            </div>
            <div class="col-md-4 mt-2">
                <input type="file" class="form-coltrol" name="task2upload" required>
            </div>
            
            <div class="col-md-4 mt-2"><b>Task 3</b></div>
            <div class="col-md-4 mt-2">
                <textarea 
                    class="form-control"
                    placeholder="Enter The Task3 here.."
                    name="task3"
                    required
                ></textarea>
            </div>
            <div class="col-md-4 mt-2">
                <input type="file" class="form-coltrol" name="task3upload" required>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <center>
                        <a href="./index.php" class="btn btn-sm btn-danger">Back</a>
                    &emsp;
                        <button name="submit" class="btn btn-sm btn-success">Create Project</button>
                    </center>
                </div>
        </div>
    </form>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>