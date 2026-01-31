
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
    <div class="container">
        <div class="mt-3">
            <center><b><i>Project List</i></b></center>
        </div>
        <br/>
        <div class="mb-2" style="float:right;">
            <a href="create.php" class='btn btn-primary btn-sm'>Add New Project</a>
        </div>
        <table class="table table-hover">
            <tr>
                <th>Project Name</th>
                <th>Project Date</th>
                <th>Project Statue</th>
                <th>Action</th>
                <th></th>
            </tr>

            <?php
                $HeaderData = "SELECT * FROM `project_header`";
                $result = $conn->query($HeaderData);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["date"]; ?></td>
                            <td><?php echo $row["status"]; ?></td>
                            <td>
                                <a href='edit.php?id=<?php echo$row["id"]; ?>' class="btn btn-sm btn-info">Edit</a>
                                &emsp;
                                <a href='delete.php?id=<?php echo$row["id"]; ?>' class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
            <?php
                    }
                } else {
            ?>
                    <tr>
                        <td colspan='5'>
                            <center>
                                <b class="text-danger"><i>No Data Found.!</i></b>
                            </center>
                        </td>
                    </tr>
            <?php
                }
            ?>
            
        </table>

        <div class="mt-2" style="float:right;">
            <button class="btn btn-danger btn-sm">Convert PDF</button>
            &emsp;
            <button class="btn btn-success btn-sm">Convert Excel</button>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>