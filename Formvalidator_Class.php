<?php
class UserValidator{
    private $data;
    private $errors = [];
    private static $fields = ['name', 'contact', 'email', 'pass1', 'pass2'];
    
    public function __construct($post_data){
        $this->data = $post_data;
    }
    
    public function ValidateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field doesn't exist.");
            }
        }
        
        $this->ValidateName();
        $this->ValidatePassword();
        $this->ValidateEmail();
        $this->ValidatePhone();
        return $this->errors;
    }
    
    private function ValidateName(){
        $val = trim($this->data['name']);
        
        if(empty($val)){
            $this->AddError('name', 'Name cannot be empty');
        }else{
            if(!preg_match('/^[a-zA-Z0-9]{3,24}$/', $val)){
                $this->AddError('name', 'Name must be Alphanumeric');
            }
        }
    }
    
    private function ValidatePhone(){
        $val = trim($this->data['contact']);
        
        if(empty($val)){
            $this->AddError('contact', 'Contact cannot be empty');
        }else{
            $pass = is_int($val);
            if($pass){
               return true;
            }else{
                //$this->AddError('contact', 'Contact must be Integer');
            }
        }
    }
    
     private function ValidatePassword(){
        $val = trim($this->data['pass1']);
         
         if(empty($val)){
             $this->AddError('pass1', 'Password cannot be empty');  
         }else{
             if(strlen($val) < 8){
                 $this->AddError('pass1', 'Weak password. Use 8 or More Characters.');
             }
         }
         
         $val = trim($this->data['pass2']);
         
         if(empty($val)){
             $this->AddError('pass2', 'Password cannot be empty');
         }else{
             if(strlen($val) < 8){
                 $this->AddError('pass2', 'Weak password. Use 8 or More Characters.');
             }
         }
         
    }
    
     private function ValidateEmail(){
         $val = trim($this->data['email']);
         
          if(empty($val)){
            $this->AddError('email', 'Email cannot be empty');
        }else{
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->AddError('email', 'Email must be Valid');
            }
        }
     }
    
    public function AddError($key, $val){
     $this->errors[$key] = $val;   
    }
}