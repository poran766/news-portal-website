<?php

include 'config.php';

$delete_id = $_GET['id']; 
$delete_query = "DELETE FROM users WHERE user_id = '{$delete_id}'";

$delete_query_result = mysqli_query($connection,$delete_query) or die("Not deleted'");

if($delete_query_result){
    header("location: users.php");
}else{
    echo "You can't detele user";
}

mysqli_close($connection);

?>