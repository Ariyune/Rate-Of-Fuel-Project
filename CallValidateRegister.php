<?php
  require_once("ValidateRegister.php");
  $LogIn = new ValidateRegister ($_POST["username"], $_POST["password"]);
  $UserValid = $LogIn->validateUsername();
  $PassValid = $LogIn->validatePassword();
  $LogIn->validateAllFields ($UserValid, $PassValid);
