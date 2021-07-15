<?php

class ValidateFuelQuote {
  public $GallonsRequested;
  public $DeliveryAddress;
  public $DeliveryDate;
  public $SuggestedPriceperGallon;
  public $TotalAmountDue;

  public function __construct($aGallonsRequested, $aDeliveryAddress, $aDeliveryDate, $aSuggestedPriceperGallon, $aTotalAmountDue) {
    $this->GallonsRequested = $aGallonsRequested;
    $this->DeliveryAddress = $aDeliveryAddress;
    $this->DeliveryDate = $aDeliveryDate;
    $this->SuggestedPriceperGallon = $aSuggestedPriceperGallon;
    $this->TotalAmountDue = $aTotalAmountDue;
  }

  public function validateGallonsRequested () {
      if (empty($this->GallonsRequested)) {
          echo "The Gallons Requested Field is empty. <br>";
          return false;
      }
      else {
          if (!filter_var($this->GallonsRequested, FILTER_VALIDATE_INT)) {
              echo "Please enter a number value into the Gallons Requested Field. <br>";
              return false;
          }
          else {
              return true;
          }
      }
  }

  public function validateDeliveryAddress () {
    if (empty($this->DeliveryAddress)) {
      echo "The Delivery Address is empty.<br>";
      return false;
    }
    else {
      if (preg_match("/[^A-Za-z0-9\s]/", $this->DeliveryAddress)) { //checks for alphanumeric + whitespaces
        echo "Please enter a proper address in Profile Management. <br>";
        return false;
      }
      else {
          return true;
      }
    }
  }

  public function validateDeliveryDate () {
    if (empty($this->DeliveryDate)) {
      echo "The Delivery Date is empty. <br>";
      return false;
    }
    else {
      return true;
    }
  }

  public function validateSuggestedPriceperGallon () {
    if (empty($this->SuggestedPriceperGallon)) {
      echo "The Suggested Price / gallon is not calcualted. <br>";
      return false;
    }
    else {
      if (!filter_var($this->SuggestedPriceperGallon, FILTER_VALIDATE_INT)) {
        echo "The Suggested Price / gallon is not numeric. <br>";
        return false;
      }
      else {
          return true;
      }
    }
  }

  public function validateTotalAmountDue () {
    if (empty($this->TotalAmountDue)) {
      echo "The Total Amount Due is not calculated. <br>";
      return false;
    }
    else {
      if (!filter_var($this->TotalAmountDue, FILTER_VALIDATE_INT)) {
        echo "The Total Amount Due is not numeric. <br>";
        return false;
      }
      else {
          return true;
      }
    }
  }

  public function AllFieldsValid ($GallonsRequestedValid, $DeliveryAddressValid, $DeliveryDateValid, $SuggestedPriceperGallonValid, $TotalAmountDueValid) {
    if ($GallonsRequestedValid && $DeliveryAddressValid && $DeliveryDateValid && $SuggestedPriceperGallonValid && $TotalAmountDueValid) {
        return true;
    }
    else {
        return false;
    }
  }
}
/*
$fuelformrequest1 = new ValidateFuelQuote ($_POST["GallonsRequested"], $_POST["DeliveryAddress"], $_POST["DeliveryDate"], $_POST["SuggestedPriceperGallon"], $_POST["TotalAmountDue"]);
$GR = $fuelformrequest1->validateGallonsRequested();
$DA = $fuelformrequest1->validateDeliveryAddress();
$DD = $fuelformrequest1->validateDeliveryDate();
$PPpG = $fuelformrequest1->validateSuggestedPriceperGallon();
$TAD = $fuelformrequest1->validateTotalAmountDue();
$fuelformrequest1->AllFieldsValid($GR,$DA,$DD,$PPpG,$TAD);
*/
