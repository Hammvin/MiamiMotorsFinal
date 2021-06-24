<?php 
require_once('config.php');
$db = new dbconfig();

class Upload_ops extends dbconfig{

    public function Grab_images(){
        $name = $target_file= $price = $link = $details = '';
        $target_dir = "uploads/";
        $uploadOk = 1;

        if(isset($_POST["submit"])||!empty($_FILES["fileToUpload"]["name"])) {
            $target_file =$target_dir.basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        
            //    Assign values to variables
            $name = $_POST['imgName'];
            $price = $_POST['price'];
            $details = $_POST['message'];
        
            //    check if image is an image or fake
            if($check !== false) {
                $check["mime"];
                $uploadOk = 1;
                if (file_exists($target_file)) {
                    echo "File already exists. ";
                    $uploadOk = 0;
                }
                //  Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
        
            } 
        
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. ";

                    //Pull all data from the DB table
                    $this->Retrieve_data($target_file);
                    global $check;
        
                    //     Check existence of the record.
                    if (mysqli_num_rows($check) > 0){
                        echo "Record exists in the DB. ";
                    }else{
                        //    throw the data to the db
                        if ($this->Save_image(NULL,$name,$price,$target_file,$details)){
                            echo "Record inserted successfully. ";
                        }
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }

    } 
    
    private function Retrieve_data($a){
        global $db;
        global $check;
        $sql = "SELECT * FROM `units` WHERE link = '$a'";
        $check = mysqli_query($db->connect, $sql);
        return $check;
    }

    private function Save_image($a,$b,$c,$d,$e){
        global $db;
        $query = "INSERT INTO `units`(`id`, `name`, `price`, `link`, `description`) VALUES ('$a','$b','$c','$d','$e')";
        $insert = mysqli_query($db->connect,$query);
    }

}