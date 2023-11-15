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
    

<form action="" method="post">
    <div class="row m-5">
        <div class="col-6">
            <h2>Add New Employee</h2>
        </div>
        <div class="col-4">
            <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text"
            class="form-control" name="fname" id="fname" placeholder="">
            </div>
    

        
            <div class="mb-3">
            <label for="mname" class="form-label">Middle Name</label>
            <input type="text"
                class="form-control" name="mname" id="mname" placeholder="">
            </div>


            <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text"
                class="form-control" name="lname" id="lname" placeholder="">
            </div>
       

   
            <div class="mb-3">
            <label for="pos" class="form-label">Position</label>
            <input type="text"
                class="form-control" name="pos" id="pos" placeholder="">
            </div>
      

            <div class="mb-3">
            <label for="dept" class="form-label">Department</label>
            <input type="text"
                class="form-control" name="dept" id="dept" placeholder="">
            </div>


            <div class="mb-3">
            <label for="campus" class="form-label">Campus</label>
            <input type="text"
                class="form-control" name="campus" id="campus" placeholder="">
            </div>

            <button type="submit" name="emp-add" class="btn btn-primary col-12">Submit</button>
        
        </div>
    
</form>

<script src="../../bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>
</html>