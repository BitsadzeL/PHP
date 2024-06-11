<?php
    require_once('db-connection.php');
    $id='';
    //movitxovet name-it
    $firstname=$_REQUEST["first_name"];
    $lastname=$_REQUEST["last_name"];
    $gender=$_REQUEST["gender"];
    $address=$_REQUEST["address"];
    $email=$_REQUEST["email"];

    $sql="INSERT INTO college VALUES('$id','$firstname', '$lastname', '$gender', '$address', '$email')";

    if(mysqli_query($conn,$sql)){
        echo "<h3>data stored in a database successfully."
        ."Please browse your localhost php my admin"
        ."to view the updated data </h3>";

        echo nl2br("\n$firstname\n$lastname\n$gender\n$email");
    }else{
        echo "ERROR: HUSH! Sorry $sql. ". mysqli_error($conn);
    }

    mysqli_close($conn);


?>