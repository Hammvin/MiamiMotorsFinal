<?php
class dbconfig{
    
    public function __construct(){
        $this-> db_connect();
    }
    
    public function db_connect(){
        $server='localhost';
        $user = 'root';
        $password = '';
        $Db = 'miamimotors';
        
        //Connect to DB
        $connect = new mysqli($server, $user, $password, $Db);
        
        //Check Connection
        if($connect->connect_error){
            die('Connection failed: '.$connect->connect_error);
        }
        $this->connect = mysqli_connect('localhost', 'root', '', 'miamimotors');
       if(!$connect){
            error_log("Connection failed!",0);
        }
    }
    
     public function check($a){
        $return = mysqli_real_escape_string($this->connect, $a);
        return $return;
    }
}

?>