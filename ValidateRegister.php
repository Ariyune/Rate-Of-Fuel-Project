<?php

class ValidateRegister{
    public  $Username;
    public  $Password;

    public function __construct($aUsername, $aPassword){
        $this->Username = $aUsername;
        $this->Password = $aPassword;
    }

    public function validateUsername() {
        if (empty($this->Username)){
            echo "Username is empty. <br>";
            return false;
        }
        else{
            return true;
        }
    }

    public function validatePassword() {
        if (empty($this->Password)){
            echo "Password is empty. <br>";
            return false;
        }
        else{
            return true;
        }
    }

    public function validateAllFields ($UsernameValid, $PasswordValid) {
        if ($UsernameValid && $PasswordValid) {
            echo true;
            return true;
        }
        else {
            echo false;
            return false;
        }
    }
}
