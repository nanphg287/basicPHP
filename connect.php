<?php
    $DB_HOST = 'localhost'; //server name
    $DB_USER = 'root';  //username
    $DB_PASS = ''; //your password
    $DB_NAME = 'demo'; //your database name
    //create connection
    $connect=mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    //check connection
    if($connect){
        mysqli_query($connect,"SET NAMES 'utf8'");
    }else{
        echo "Connection failed".mysqli_connect_error();
    }		

?>