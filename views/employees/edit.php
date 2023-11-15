<?php
    include('../../middleware/validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link href="../../bootstrap5/css/bootstrap.min.css" rel="stylesheet">

    <title>Meeting Attendance System</title>
</head>
<body>
    
<?php
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
            $empController  = new EmployeeController();
            $result = $empController->getEmp($id);
            if ($result) {
                $row = $result->fetch_assoc();
}
?>

<form action="" method="post">
    <div class="row m-5">
        <div class="col-6">
            <h2>Edit Employee</h2>
        </div>
        <div class="col-4">

            <div class="mb-3">
            <input type="hidden"
            class="form-control" name="empNo" id="empNo" value="<?= $row['empNo'] ?>">
            </div>

            <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text"
            class="form-control" name="fname" id="fname" value="<?= $row['empFName'] ?>">
            </div>
    

        
            <div class="mb-3">
            <label for="mname" class="form-label">Middle Name</label>
            <input type="text"
                class="form-control" name="mname" id="mname" value="<?= $row['empMName'] ?>">
            </div>


            <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text"
                class="form-control" name="lname" id="lname" value="<?= $row['empLName'] ?>">
            </div>
       

   
            <div class="mb-3">
            <label for="pos" class="form-label">Position</label>
            <input type="text"
                class="form-control" name="pos" id="pos" value="<?= $row['empPosition'] ?>">
            </div>
      

            <div class="mb-3">
            <label for="dept" class="form-label">Department</label>
            <input type="text"
                class="form-control" name="dept" id="dept" value="<?= $row['empDept'] ?>">
            </div>


            <div class="mb-3">
            <label for="campus" class="form-label">Campus</label>
            <input type="text"
                class="form-control" name="campus" id="campus" value="<?= $row['empCampus'] ?>">
            </div>

            <button type="submit" name="emp-edit" class="btn btn-primary col-12">Edit</button>
        
        </div>
        <?php
            }else{
                echo "<h2> The account does not exist";
            }
        ?>
    
</form>

<script src="../../bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>