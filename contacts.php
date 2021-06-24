<?php
include 'header.php';
include 'config.php';


$name = $phone = $email = $country = '';
$sql = '';
$result = '';

function clean($data){
    $data= trim($data);
    $data= stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//    Grabbing Data
if (isset($_POST['Submitbtn'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $message = $_POST['message'];

//        Cleaning the grabbed data
    $name = clean($name);
    $phone = clean($phone);
    $email = clean($email);
    $country = clean($country);
    $message = clean($message);


//        Connect to DB
    $sql = "INSERT INTO `message`(`id`, `name`, `phone`, `email`, `country`, `message`) VALUES (NULL ,'$name','$phone','$email','$country','$message')";
    $result = mysqli_query($conn,$sql);

//Recipient
    $to = "";

//    Subject
    $subject = "About Your Cars";

//    Message
    $text = "$message";

//    Header
    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

}

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h2 style="text-align: center">Our Contacts | Talk to Us</h2>
            <p class="contacts-end">Phone: 0736853589<br>
                Email: info@miamimotors.com<br>
                Location: Plaza 2000, Mombasa road, Nairobi</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h4 style="text-align: center" class="text text-warning"> You can also write to us below:</h4>
                <hr>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
        </div>
        <!..email form..>
        <form action="contacts.php" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <?php
                    if ($result){
                        echo "<span style='color: aqua'>Message sent!</span>";
                    }
                    ?>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="country">
                    </div>
                </div>
            </div>
            <textarea style="margin-left: 50px " name="message" rows="5" cols="100"></textarea><br>
            <input type="submit" class="btn btn-info" style="margin-left: 50px" value="Submit" name="Submitbtn">
        </form>
    </div>
</div>
<hr>
<div class="footer">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <p>Miami Motors &copy; 2019 . All rights reserved. </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
</div>


<?php include 'footer.php';
?>