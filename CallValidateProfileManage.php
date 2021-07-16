<?php
  require_once("ValidateProfileManage.php");
  $ManageRequest = new ValidateProfileManage($_POST["fullName"], $_POST["firstAddress"], $_POST["secondAddress"], $_POST["city"], $_POST["State"], $_POST["ZipCode"]);
  $NM = $ManageRequest->validateName();
  $FA = $ManageRequest->validateAddress();
  $CT = $ManageRequest->validateCity();
  $ST = $ManageRequest->validateState();
  $ZC = $ManageRequest->validateZip();
  $ManageRequest->AllFieldsValid($NM,$FA, $CT, $ST, $ZC);
