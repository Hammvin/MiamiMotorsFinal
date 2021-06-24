<?php include 'header.php';
include 'config.php';

$id = '';

if (isset($_GET['id'])){
    $id = $_GET['id'];

//    Use the id to grab data from the DB
    $sql = "SELECT * FROM `units` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

//    Assign DB data to variables
    $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['link'];
        $details = $row['description'];
    }

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <?php ?>
            <a href='<?php echo "update.php?id=$id"?>'>
                <img src="<?php echo $image?>" alt="" class="img-thumbnail">
            </a>

            <h5><?php echo $name?></h5>
            <h5><?php echo "Ksh.".$price?></h5>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <textarea name="details" id="" cols="90" rows="10" class="form-control"><?php echo $details?></textarea>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>
