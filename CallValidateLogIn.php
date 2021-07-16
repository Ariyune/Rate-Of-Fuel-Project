<?php
  require_once("ValidateLogIn.php");
  $LogIn = new ValidateLogIn ($_POST["usname"], $_POST["pword"]);
  $UserValid = $LogIn->validateUsername();
  $PassValid = $LogIn->validatePassword();
  $LogIn->validateAllFields ($UserValid, $PassValid);
