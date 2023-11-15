<?php
    include('../../middleware/validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <title>Meeting Attendance System</title>
</head>
<body>
    <?php
        if(isset($_SESSION['message'])){
            echo "<h5>".$_SESSION['message']."</h5>";
            unset($_SESSION['message']);
        }
    ?>
    <a href="add.php" class="btn btn-primary ">Add</a>
    <div class="table-responsive">
        <table class="table table-outline-primary m-5 ">
            <thead>
                <tr>
                    <th scope="col">Employee No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Department</th>
                    <th scope="col">Campus</th>
                    <th scope="col" colspan="2">Campus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $empController = new EmployeeController();
                    $result = $empController->viewEmp();

                    if($result){
                        foreach($result as $row){
                    

                ?>
                        <tr class="">
                            <td scope="row"><?=$row['empNo'] ?></td>
                            <td><?=$row['empFName'] ?></td>
                            <td><?=$row['empMName'] ?></td>
                            <td><?=$row['empLName'] ?></td>
                            <td><?=$row['empPosition'] ?></td>
                            <td><?=$row['empDept'] ?></td>
                            <td><?=$row['empCampus'] ?></td>

                            <td>
                                <a href="edit.php?id=<?=$row['empNo']?>">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?= $row['empNo']?>">Delete</a>
                            </td>
                        </tr>
                        
                <?php
                        }
                    }else{
                        echo "<tr";
                        echo "<td class='border border-slate-400' colspan='7'>No records</td>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="../../bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>