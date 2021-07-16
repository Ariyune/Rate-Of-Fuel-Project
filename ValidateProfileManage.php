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
                echo "Full Name is required <br>";
                return false;
            }
            else if (!preg_match("/^[a-zA-Z\d\s]+$/", $this->Name)) {
                echo "Full Name input is invalid, please enter alphanumeric characters. <br>";
                return false;
            }
            else {
                if (strlen($this->Name) > 50) {
                    echo "Full Name is too long, keep it less than or equal to 50 characters. <br>";
                    return false;
                }
                else {
                    return true;
                }
            }
        }

        public function validatefirstAddress() {
            if (empty($this->FirstAddress)) {
                echo "Address 1 is required. <br>";
                return false;
            }
            else if (!preg_match("/^[a-zA-Z\d\s]+$/", $this->FirstAddress)) {
                echo "Address 1 input is invalid, please enter alphanumeric characters. <br>";
                return false;
            }
            else if (strlen($this->FirstAddress) > 100) {
                echo "Address 1 is too long, keep it less than or equal to 100 characters. <br>";
                return false;
            }
            else {
              return true;
            }
        }

        public function validatesecondAddress() {
          if (empty($this->SecondAddress)){
             return true;
          }
          if (!preg_match("/^[a-zA-Z\d\s]+$/", $this->SecondAddress)) {
              echo "Address 2 input is invalid, please enter alphanumeric characters. <br>";
              return false;
          }
          else if (strlen($this->SecondAddress) > 100) {
              echo "Address 2 is too long, keep it less than or equal to 100 characters. <br>";
              return false;
          }
          else {
            return true;
          }
        }

        public function validateCity() {
            if (empty($this->City)) {
                echo "City is required. <br>";
                return false;
            }
            else if (!preg_match("/^[a-zA-Z\d\s]+$/", $this->City)) {
                echo "City input is invalid, please enter alphanumeric characters. <br>";
                return false;
            }
            else {
                if (strlen($this->City) > 100) {
                    echo "City name is too long, keep it less than or equal to 100 characters. <br>";
                    return false;
                }
                else {
                    return true;
                }
            }

        }

        public function validateState() {
            if (empty($this->State)) {
                echo "State selection is required. <br>";
                return false;
            }
            else {
                return true;
            }
        }

        public function validateZip() {
            if(empty($this->Zip)) {
                echo "Zip Code entry is required. <br>";
                return false;
            }
            else if (!preg_match("/^[a-zA-Z\d\s]+$/", $this->Zip)) {
                echo "Zip Code input is invalid, please enter alphanumeric characters. <br>";
                return false;
            }
            else {
                if (strlen($this->Zip) < 5) {
                    echo "Zip Code is too short, keep it less than or equal to 5 characters. <br>";
                    return false;
                }
                else if (strlen($this->Zip) > 9) {
                    echo "Zip Code is too long, keep it less than or equal to 9 characters. <br>";
                    return false;
                }
                else {
                    return true;
                }
            }
        }

        public function AllFieldsValid($NameValid, $firstAddressValid, $secondAddressValid, $CityValid, $StateValid, $ZipValid) {
            if($NameValid && $firstAddressValid && $secondAddressValid && $CityValid && $StateValid && $ZipValid) {
                echo true;
                return true;
            }
            else {
                echo false;
                return false;
            }
        }
    }
