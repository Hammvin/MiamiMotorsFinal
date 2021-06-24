<?php include 'header.php';
require_once('signin_ops.php');
require_once('Formvalidator_Class.php');
$db = new signin_ops();
if(isset($_POST['signup'])){
    $validation = new UserValidator($_POST);
    $errors = $validation->ValidateForm();
}
?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="signin.php" method="post">
                <div class="form-group">
                    <h3 class="text text-warning text-center">Welcome To Miami-Motors.</h3>
                    <h5 class="text-center text-info">Create Your Account Now!</h5>
                </div>
                <?php $db->grab_data();
                if(isset($_GET['error'])){
                    $error = $_GET['error'];
                    echo $error;
                }
                ?>
                
                <div class="form-group">
                    <label for ='username' class="text text-info">Username:</label>
                    <input type="text" name="name" placeholder="Enter Username" class="form-control">
                    <div class="text text-danger text-center"><?php echo $errors['name'] ?? ''?></div>
                </div>
                <div class="form-group">
                    <label for ='' class="text text-info">Phone:</label>
                    <input type="tel" name="contact" placeholder="+254---" class="form-control">
                    <div class="text text-danger text-center"><?php echo $errors['contact'] ?? ''?></div>
                </div>
                <div class="form-group">
                    <label for ='' class="text text-info">Email:</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control">
                    <div class="text text-danger text-center"><?php echo $errors['email'] ?? ''?></div>
                </div>
                <div class="form-group">
                    <label for ='' class="text text-info">Password:</label>
                    <input type="password" name="pass1" placeholder="Enter Password" class="form-control">
                    <div class="text text-danger text-center" style="Font-size: 11"><?php echo $errors['pass1'] ?? ''?></div>
                    <div class="text text-center">
                    <?php
                    if (isset($_GET['err'])){
                        echo "<p class='text-danger'>Err: Passwords didn't match.</p>";
                    }
                    ?>
                </div>
                </div>
                <div class="form-group">
                    <label for ='password' class="text text-info">Confirm Password:</label>
                    <input type="password" name="pass2" placeholder="Confirm Password" class="form-control">
                    <div class="text text-danger text-center"><?php echo $errors['pass2'] ?? ''?></div>
                </div>
                <div class="form-group">
                    <input type="submit" name="signup" value="Signup" style="float: right" class="btn btn-info">
                </div>

            </form><br>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>











<?php include 'footer.php'?>