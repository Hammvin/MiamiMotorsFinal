<?php
require_once('config.php');
require_once('login_validator.php');
$db = new dbconfig();

class login_ops extends dbconfig{
    
    public function Collect_data(){
        global $db;
        if(isset($_POST['loginBtn'])){
            $validate = new login_validator($_POST);
            $errors = $validate->validatform();
            If(empty($errors)){
                 $email = $_POST['email'];
                 $password = $_POST['password'];
                
                //Eliminate Html Specialchars
                $email = htmlspecialchars($email);
                $password = htmlspecialchars($password);
                $password = md5($password);
                
                //Check the record in the DB
                $this->check_data($email, $password);
                global $result;
                if(mysqli_num_rows($result) > 0){
                    //Start Session
                    $_SESSION['logged-in'] = true;
                    
                    //Redirect with a message
                    $successmsg ="Welcome to our site!";
                    header("location:index.php?err=$successmsg");   
                }else{
                    $errormsg = "You may need to Signin.";
                    header("location:login.php?err=$errormsg");
                }
                
            }
            
        }
    }
    
    public function check_data($email, $password){
     global $db, $result;
        $query = "Select * From login Where email ='$email' AND password = '$password'";
        $result = mysqli_query($db->connect, $query);
        return $result;
    }
}