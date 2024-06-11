<?php 
    //Create connection to the database
    $database_server='localhost';
    $database_username='root';
    $database_password='';
    $database_name='stuff';

    //Connect to the database
    $conn=mysqli_connect($database_server,$database_username,$database_password,$database_name);

    if(!$conn){
        die("Failed to connect mySQL". mysqli_connect_error());
    }else{
        echo "success";
    }


?>