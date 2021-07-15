<?php
  require_once("ValidateFuelQuote.php");
  AddEntry($_POST["GallonsRequested"], $_POST["DeliveryAddress"], $_POST["DeliveryDate"], $_POST["SuggestedPriceperGallon"], $TotalAmountDue = $_POST["TotalAmountDue"]);
?>
