<?php
    class ValidateProfileManage {
        public $Name;
        public $FirstAddress;
        public $SecondAddress;
        public $City;
        public $State;
        public $Zip;

        public function __construct($aName, $aFirstAddress, $aSecondAddress, $aCity, $aState, $aZip) {
            $this->Name = $aName;
            $this->FirstAddress = $aFirstAddress;
            $this->SecondAddress = $aSecondAddress;
            $this->City = $aCity;
            $this->State = $aState;
            $this->Zip = $aZip;
        }

        public function validateName() {
            if (empty($this->Name)) {
                echo "Name is empty. <br>";
                return false;
            }
            else {
                if (strlen($this->Name) > 50) {
                    echo "Name is too long. <br>";
                    return false;
                }
                else {
                    return true;
                }
            }
        }

        public function validateAddress() {
            if (empty($this->FirstAddress)) {
                echo "Address 1 is required. <br>";
                return false;
            }
            else {
              if ((strlen($this->FirstAddress) > 100)&&(strlen($this->SecondAddress) > 100)) {
                  echo "First and Second Address is too long. <br>";
                  return false;
              }
              else if (strlen($this->FirstAddress) > 100) {
                  echo "First Address is too long. <br>";
                  return false;
              }
              else if (strlen($this->SecondAddress) > 100) {
                  echo "Second Address is too long. <br>";
                  return false;
              }
              return true;
            }
        }

        public function validateCity() {
            if (empty($this->City)) {
                echo "City is empty. <br>";
                return false;
            }
            else {
                if (strlen($this->City) > 100) {
                    echo "City name is too long. <br>";
                    return false;
                }
                else {
                    return true;
                }
            }

        }

        public function validateState() {
            if (empty($this->State)) {
                echo "State is empty. <br>";
                return false;
            }
            else {
                return true;
            }
        }

        public function validateZip() {
            if(empty($this->Zip)) {
                echo "Zip is empty. <br>";
                return false;
            }
            else {
                if (strlen($this->Zip) < 5) {
                    echo "Zip Code is too short; less than 5 characters. <br>";
                    return false;
                }
                else if (strlen($this->Zip) > 9) {
                    echo "Zip Code is too long; greater than 9 characters. <br>";
                    return false;
                }
                else {
                    return true;
                }
            }
        }

        public function AllFieldsValid($NameValid, $AddressValid, $CityValid, $StateValid, $ZipValid) {
            if($NameValid && $AddressValid && $CityValid && $StateValid && $ZipValid) {
                echo true;
                return true;
            }
            else {
                echo false;
                return false;
            }
        }
    }
