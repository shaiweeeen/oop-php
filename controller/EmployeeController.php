<?php

class EmployeeController{
    public $db;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->db = $conn->conn;
    }

    function addEmp($data){
        $values="'".implode("','",$data)."'";
        $query = "INSERT INTO employees(empFName,empMName,empLName,empPosition,empDept,empCampus) VALUES ($values)";
        $result = $this-> db->query($query);
        if($result){
            return true;
        }
        return false;
    }

    function viewEmp(){
        
        $query = "SELECT * FROM employees";
        $result = $this-> db->query($query);
        if($result->num_rows >0){
            return $result;
        }
        return false;
    }
    function getEmp($id){
        $query = "SELECT * FROM employees WHERE empNo=$id";
        $result = $this-> db->query($query);
        if($result->num_rows >0){
            return $result;
        }
        return false;
    }

    function editEmp($id, $data){
        $empFName = $data['fname'];
        $empMName = $data['mname'];
        $empLName = $data['lname'];
        $position = $data['pos'];
        $department = $data['dept'];
        $campus = $data['campus'];

        $query = "UPDATE employees SET empFName = '$empFName', empMName = '$empMName', empLName = '$empLName', empPosition = '$position', empDept = '$department', empCampus = '$campus' WHERE empNo = $id LIMIT 1";
        $result = $this-> db->query($query);
        if($result){
            return true;
        }
        return $this->db->info;
    }

    function deleteEmp($id){
        $query = "DELETE FROM employees WHERE empNo = $id LIMIT 1";
        $result = $this-> db->query($query);
        if($result){
            return true;
        }
        return false;
    }

    function searchEmp($searchKey){
        $query = "SELECT * FROM employees WHERE empFName LIKE $searchKey || empMName LIKE $searchKey  || empLName LIKE $searchKey ";
        $result = $this-> db->query($query);
        if($result->num_rows >0){
            return $result;
        }
        return false;
    }
}
?>