<?php
    class ValidateLogIn{
    public  $Username;
    public  $Password;

    public function __construct($aUsername, $aPassword){
        $this->Username = $aUsername;
        $this->Password = $aPassword;
    }

    public function validateUsername() {
          if (empty($aUsername)){
              echo "Username is empty. <br>";
              return false;
          }
          else{
              return true;
          }
    }
    public function validatePassword() {
          if (empty($aPassword)){
              echo "Password is empty. <br>";
              return false;
          }
          else{
              return true;
          }
    }
    ?>
