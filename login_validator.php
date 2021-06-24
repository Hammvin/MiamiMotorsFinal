<?php

class login_validator{
    private $data;
    private $errors = [];
    private static $fields = ['email', 'password'];
    
    public function __construct($post_data){
        $this->data = $post_data;
    }
    
    public function validatform(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field doesn't exist");
            }
        }
        $this->Validate_Email();
        $this->Validate_Password();
    }
    
    public function Validate_Email(){
        $val = trim($this->data['email']);
        if(empty($val)){
            $this->AddError('email','Email cannot be Empty!');
        }else{
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
                $this->AddError('email', 'Email must be Valid');
            }
        }
    }
    
    public function Validate_Password(){
        $val = trim($this->data['password']);
        if(empty($val)){
            $this->AddError('password', 'Password cannot be Empty');
        }else{
            if(strlen($val) < 8){
                $this->AddError('password', 'Weak Password. Use 8 or More Characters');
            }
        }
    }
    
    public function AddError($key, $val){
        $this->errors[$key] = $val;
    }
}