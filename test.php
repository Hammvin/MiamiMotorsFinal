<?php include 'header.php';
include 'config.php';

$email = $password1 = '';
function cleaner($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
if(isset($_POST['loginBtn'])){

//    grabbing form data
    $email = $_POST['arafa'];
    $password = $_POST['password'];

//    clean the data
    $email = cleaner($email);

    //encrypt the password
    $password = md5($password);


//    check if the user exists in the database: if true ask them to login instead
    $sql = "SELECT `email`, `password` FROM `customers` WHERE email = '$email' AND password = '$password'";
    $results = mysqli_query($conn,$sql);

    if(mysqli_num_rows($results) > 0){

        $_SESSION['logged-in'] = true;

        //Redirect if user is present
        header("location:profile.php");
        exit();
    }else{
        //Redirect to the login page
        header("location:signin.php");

    }
    mysqli_close($conn);
}
?>