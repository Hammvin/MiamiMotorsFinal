<?php
require_once('config.php');
require_once('Formvalidator_Class.php');
$db = new dbconfig();

class signin_ops extends dbconfig{
    
    public function grab_data(){
        global $db;
        
        
        if(isset($_POST['signup'])){
            $validation = new UserValidator($_POST);
            $errors = $validation->ValidateForm();
            if(empty($errors)){
                $name = $_POST['name'];
                $phone = $_POST['contact'];
                $email = $_POST['email'];
                $pass1 = $_POST['pass1'];
                $pass2 = $_POST['pass2'];
                
                $name1 = htmlspecialchars($name);
                $phone = htmlspecialchars($phone);
                $email = htmlspecialchars($email);
                
                //Check if Record exists
                if($this->check_record($name, $email)){
                    global $check;
                    if(mysqli_num_rows($check) > 0){
                        $err = "Credentials Exist. Login Instead.";
                        header("location:login.php?error=$err");
                    }else{
                        if($pass1 !== $pass2){
                            $error = "Passwords didn't match.";
                            header("location:signin.php?err=$error");
                        }
                    }
                }
                
                //Encrypt the Password
                $password = md5($pass2);
                
                
                //Insert Details to the DB
                if($this->Save_record($name, $phone,$email,$password)){
                    global $result;
                    if($result){
                        header('location:login.php?Signin Success. Now Login.');
                    }
                }
            }
        }
    }
    
    public function check_record($name, $email){
        global $db;
        global $check;
        $query = "Select * From login where name = '$name' AND email = '$email' LIMIT 1";
        $check = mysqli_query($db->connect, $query);
        return $check;
    }
    
    public function Save_record($a, $b, $c, $d){
        global $db;
        global $result;
        $sql = "INSERT INTO login(name, phone, email, password) VALUES ('$a','$b','$c','$d')";
        $result = mysqli_query($db->connect, $sql);
    }
}