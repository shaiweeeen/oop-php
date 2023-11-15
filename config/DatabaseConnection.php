<?php

class DatabaseConnection{
    public $conn;

    function __construct(){
        $conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        If(!$conn){
            die("<h3> Error connecting to DB </h3> <br> <p>Error: ".$conn);
        }
        return $this-> conn = $conn;
    }
}

?>