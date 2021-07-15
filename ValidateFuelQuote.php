<?php

class ValidateFuelQuote {
  public $GallonsRequested;
  public $DeliveryAddress;
  public $DeliveryDate;
  public $SuggestedPriceperGallon;
  public $TotalAmountDue;

  private $GallonsRequestedValid = false;
  private $DeliveryAddressValid = false;
  private $DeliveryDateValid = false;
  private $SuggestedPriceperGallonValid = false;
  private $TotalAmountDueValid = false;

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
      }
      else {
          if (!filter_var($this->GallonsRequested, FILTER_VALIDATE_INT)) {
              echo "Please enter a number value into the Gallons Requested Field. <br>";
          }
          $this->GallonsRequestedValid = true;
      }
  }

  public function validateDeliveryAddress () {
    if (empty($this->DeliveryAddress)) {
      echo "The Delivery Address is empty.<br>";
    }
    else {
      if (preg_match("/[^A-Za-z0-9 ]/ ", $this->DeliveryAddress)) { //checks for alphanumeric + whitespaces
        echo "Please enter a proper address in Profile Management. <br>";
      }
      $this->DeliveryAddressValid = true;
    }
  }

  public function validateDeliveryDate () {
    if (empty($this->DeliveryDate)) {
      echo "The Delivery Date is empty. <br>";
    }
    else {
      $this->DeliveryDateValid = true;
    }
  }

  public function validateSuggestedPriceperGallon () {
    if (empty($this->SuggestedPriceperGallon)) {
      echo "The Suggested Price / gallon is not calcualted. <br>";
    }
    else {
      if (!filter_var($this->SuggestedPriceperGallon, FILTER_VALIDATE_INT)) {
        echo "The Suggested Price / gallon is not numeric. <br>";
      }
      $this->SuggestedPriceperGallonValid = true;
    }
  }

  public function validateTotalAmountDue () {
    if (empty($this->TotalAmountDue)) {
      echo "The Total Amount Due is not calculated. <br>";
    }
    else {
      if (!filter_var($this->TotalAmountDue, FILTER_VALIDATE_INT)) {
        echo "The Total Amount Due is not numeric. <br>";
      }
      $this->TotalAmountDueValid = true;
    }
  }

  public function AllFieldsValid () {
    if ($this->GallonsRequestedValid && $this->DeliveryAddressValid && $this->DeliveryDateValid && $this->SuggestedPriceperGallonValid && $this->TotalAmountDueValid) {
      $bool = true;
      echo $bool;
    }
  }
}

$fuelformrequest1 = new ValidateFuelQuote ($_POST["GallonsRequested"], $_POST["DeliveryAddress"], $_POST["DeliveryDate"], $_POST["SuggestedPriceperGallon"], $_POST["TotalAmountDue"]);
$fuelformrequest1->validateGallonsRequested();
$fuelformrequest1->validateDeliveryAddress();
$fuelformrequest1->validateDeliveryDate();
$fuelformrequest1->validateSuggestedPriceperGallon();
$fuelformrequest1->validateTotalAmountDue();
$fuelformrequest1->AllFieldsValid();

