<?php 

class ValidateRegister{
    public  $Username;
    public  $Password;
    public  $Password_confirm;

    public function _construct($aUsername, $aPassword,$aPassword_confirm){
        $this->Username = $aUsername;
        $this->Password = $aPassword;
        $this->Password_confirm = $aPassword_confirm;
    }

    public function validateUsername() {
        if (empty($aUsername)){
            if ($aUsername == ""){
                echo "Username is empty. <br>";
                return false;
            }
            else{
                return true;
            }
        }
    }
    public function validatePassword() {
        if (empty($aPassword)){
            if ($aPassword == ""){
                echo "Password is empty. <br>";
                return false;
            }
            else{
                return true;
            }
        }
    }
    public function validateConfirmation(){
        if ($aPassword_confirm) != ($Password){
            die ("Password Confirmation is not correct");
        }
    }
?>
