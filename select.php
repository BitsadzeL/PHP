<?php 
    require_once('db-connection.php'); 

    // Mysql query to select data from table 
    $mysql_query_statement = "SELECT * FROM users"; 
    $result = $conn->query($mysql_query_statement); 

    while($user_data = mysqli_fetch_array($result)) { 

    echo $user_data['name']." ".$user_data['mobile']." ".$user_data['email'] . '<br />'; } 
    //Connection Close 
    mysqli_close($conn); 
?>
