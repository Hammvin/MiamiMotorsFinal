<?php 
include('header.php');
require_once('login_ops.php');
require_once('login_validator.php');
$db = new login_ops();
if(isset($_POST['loginBtn'])){
    $validate = new login_validator($_POST);
    $errors = $validate->validatform();
}

?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="text-dark">
            <?php if(isset($_GET['err'])){
    $err = $_GET['err'];
    echo $err;
}?>
            </div>
            <h4 style="text-align: center; font-family: 'DejaVu Serif Condensed'" class="text-success ">Login Here</h4>
            <hr>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php $db->Collect_data();?>
            <form action="login.php" method="post">
                <div>
                    <?php
                    if (isset($_GET['error'])){
                    $error = $_GET['error'];
                        echo $error;
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for ='username'>Email:</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control">
                </div>
                <div class="form-group">
                    <label for ='username'>Password:</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    <a href="signin.php">Create Account</a>
                </div>
                <div class="form-group">
                    <input type="submit" name="loginBtn" value="Login" class="btn form-control btn-info">
                </div>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>













<?php include 'footer.php'?>

