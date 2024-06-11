<?php
/** 
    * request connection */ 
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



    /** 
    * select  select select select select select select select select select select select*/ 
    require_once('db-connection.php'); 

    // Mysql query to select data from table 
    $mysql_query_statement = "SELECT * FROM users"; 
    $result = $conn->query($mysql_query_statement); 

    while($user_data = mysqli_fetch_array($result)) { 

    echo $user_data['name']." ".$user_data['mobile']." ".$user_data['email'] . '<br />'; } 
    //Connection Close 
    mysqli_close($conn);     













    /** 
    * insert  insert insert insert insert insert insert insert insert insert insert insert*/
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
















    /** 
    * update  update update update update update update update update update update update*/  
    $mysql_query_statement = "UPDATE users SET name=‘Sara' WHERE id=2"; 
    if ($conn->query($mysql_query_statement) === TRUE) { 
    echo "Record updated successfully."; 
    } else { 
    echo "Error updating record: " . mysqli_error($conn); 
    } 
    // Connection Close 
    mysqli_close($conn);
    
    

    /** 
    * delete  delete delete delete delete delete delete delete delete delete delete delete*/  
    $mysql_query_statement= "DELETE FROM users WHERE id=3"; 

    if ($conn->query($mysql_query_statement) === TRUE) { 

        echo "Record deleted successfully."; 
    } else { 
        echo "Error deleting record: " . mysqli_error($conn); } 
    // Connection Close 
    mysqli_close($conn);




?>