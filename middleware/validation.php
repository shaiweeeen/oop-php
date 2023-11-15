<?php

    include ('../../config/app.php');
    include_once('../../controller/EmployeeController.php');

    if(isset($_POST["emp-add"])){
        $data = [
            "fname" => $_POST["fname"],
            "mname" => $_POST["mname"],
            "lname" => $_POST["lname"],
            "pos" => $_POST["pos"],
            "dept" => $_POST["dept"],
            "campus" => $_POST["campus"]
        ];

        $controller = new EmployeeController();
        $result = $controller -> addEmp($data);
        echo $result;

        if($result){
            redirect("Employee added successfully",'view.php');
        }else{
            redirect("Error adding employee",'view.php');
        }
    }
    if(isset($_POST["emp-edit"])){
        $id = $_POST["empNo"];
        $data = [
            "fname" => $_POST["fname"],
            "mname" => $_POST["mname"],
            "lname" => $_POST["lname"],
            "pos" => $_POST["pos"],
            "dept" => $_POST["dept"],   
            "campus" => $_POST["campus"]
        ];

        $controller = new EmployeeController();
        $result = $controller -> editEmp($id, $data);

        if($result){
            redirect("Employee edited successfully",'view.php');
        }else{
            redirect("Error editing employee details",'view.php');
        }
    }

    


?>