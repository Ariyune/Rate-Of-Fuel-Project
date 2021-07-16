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
          echo "The Gallons Requested Field is required. <br>";
          return false;
      }
      else {
          if (!filter_var($this->GallonsRequested, FILTER_VALIDATE_INT)) {
              echo "Please enter a numeric value into the Gallons Requested Field. <br>";
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
    else if (!preg_match("/^[a-zA-Z\d\s]+$/", $this->DeliveryAddress)) {
        echo "Delivery Address input is invalid, please enter alphanumeric characters. <br>";
        return false;
    }
    else {
      return true;
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
        echo true;
        return true;
    }
    else {
        return false;
    }
  }
}

function AddEntry ($GallonsRequested, $DeliveryAddress, $DeliveryDate, $SuggestedPriceperGallon, $TotalAmountDue) {
    echo  "<tr>
          <td>$GallonsRequested</td>
          <td>$DeliveryAddress</td>
          <td>$DeliveryDate</td>
          <td>$SuggestedPriceperGallon</td>
          <td>$TotalAmountDue</td>
        </tr>";
}
