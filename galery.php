<?php
include 'header.php';
require_once 'config.php';
$db = new dbconfig();
?>

<div class="container">
    <h2 style="text-align: center; font-family: 'DejaVu Serif'" class="mt-5">Available Units</h2>
    <?php

    // Pull all data from the db
    global $db;
    $sql = "SELECT * FROM `units`";
    $result= mysqli_query($db->connect, $sql);

    echo "<div class='row'>";
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $details = $row['description'];
        $link = $row['link'];

        //        presenting the data
        echo "<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'>";
        echo "<div class='img-thumbnail'>";
        echo "<a href='details.php?id=$id'>";
        echo "<img src='$link' alt='Car' class='img-thumbnail'>";
        echo "<h5>$name</h5>";
        echo "<h5>$price</h5>";
        echo "</a>";
        echo "</div>";
        echo "</div>";


    }
    echo "</div>";

    ?>

</div>

<?php include 'footer.php'; ?>