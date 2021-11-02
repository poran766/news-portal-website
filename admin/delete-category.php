<?php

include 'config.php';

$delete_id = $_GET['id']; 
$delete_query = "DELETE FROM category WHERE category_id = '{$delete_id}'";

$delete_query_result = mysqli_query($connection,$delete_query) or die("Not deleted'");

if($delete_query_result){
    header("location: category.php");
}else{
    echo "You can't detele category";
}

mysqli_close($connection);

?>