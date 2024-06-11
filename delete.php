<?php 

    require_once('db-connection.php'); 

    $mysql_query_statement= "DELETE FROM users WHERE id=3"; 

    if ($conn->query($mysql_query_statement) === TRUE) { 

        echo "Record deleted successfully."; 
    } else { 
        echo "Error deleting record: " . mysqli_error($conn); } 
    // Connection Close 
    mysqli_close($conn); 
?>
