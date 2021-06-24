<?php
include 'header.php';
include 'config.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM `units` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $image = $row['link'];
    $details= $row['description'];


}

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 "></div>
        <div class="col-sx-12 col-sm-12 col-md-8 col-lg-8">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" >
                <div class="form-group">
                    <img src="<?php echo $image ?>" alt="" class="img-thumbnail">
                </div>
                <div class="form-group">
                    <input type="text" name="id" value="<?php echo $id ?>" hidden>
                </div>
                <div class="form-group">
                    <input type="text" name="name" value="<?php echo $name ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="price" value="<?php echo $price ?>" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="link" value="<?php echo $image ?>" class="form-control">
                </div>
                <textarea name="details"  cols="90" rows="10" class="form-control"><?php echo $details ?></textarea>
                <input type="submit" name="updateBtn" value="Update" class="btn btn-info">
                <a href='<?php echo  "delete.php?id=$id" ?>' class='btn btn-danger'>Delete</a>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 "></div>
    </div>
</div>

<?php

if (isset($_SESSION['logged-in'])){

    //    Assign updated details to variables
    if (isset($_POST['updateBtn'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['link'];
        $details = $_POST['details'];

//    Send the updates to the DB
        $sqli = "UPDATE `units` SET `id`='$id',`name`='$name',`price`='$price',`link`='$image',`description`='$details' WHERE id = '$id'";
        if (mysqli_query($conn,$sqli)){
            header('location:galery.php?msg=Update Successful!');
            exit();
        }else{
            header('location:update.php?msg=An error ');
        }

    }
}




?>




