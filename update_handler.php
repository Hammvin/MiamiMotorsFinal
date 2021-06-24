<?php
include 'config.php';

    if (isset($_POST['updateBtn'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $link = $_POST['link'];
        $details = $_POST['description'];

        $sql = "UPDATE `units` SET `id`='$id',`name`='$name',`price`='$price',`link`='$link',`description`='$details' WHERE id='$id'";

        if (mysqli_query($conn, $sql)){
            header('location: galery.php?msg=Record updated successfully');
            exit();
        }else{
            header('location:update.php?err_msg=Could not update record');
        }
    }
?>


