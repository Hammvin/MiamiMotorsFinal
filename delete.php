<?php
include 'config.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];


    $sql = "DELETE FROM `units` WHERE id = '$id'";

    if (mysqli_query($conn, $sql)){
        header('location:galery.php?msg=Record deleted successfully');
        exit();
    }else{
        header('location:update.php?err_msg=Could not delete the record');
    }

}



?>