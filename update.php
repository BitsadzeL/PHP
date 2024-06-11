<?php 
    /** 
    * Update data in a Table */ 
    require_once('db-connection.php'); 


    $mysql_query_statement = "UPDATE users SET name=‘Sara' WHERE id=2"; 
    if ($conn->query($mysql_query_statement) === TRUE) { 
    echo "Record updated successfully."; 
    } else { 
    echo "Error updating record: " . mysqli_error($conn); 
    } 
    // Connection Close 
    mysqli_close($conn); 
?>
