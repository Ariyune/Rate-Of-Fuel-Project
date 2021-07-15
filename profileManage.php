<!DOCTYPE html>
<html>
<body>
    Front End to Back End <br>
    <?php
    class ValidateProfile {
        public $Name;
        public $FirstAddress;
        public $City;
        public $State;
        public $Zip;

        public function __construct($aName, $aFirstAddress, $aCity, $aState, $aZip) {
            $this->Name = $aName;
            $this->FirstAddress = $aFirstAddress;
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
                if (!preg_match('/^[\p{L&} -]+$/u', $this->Name)) {
                    echo "Wrong input of Name: " . $this->Name . "<br>";
                    return false;
                }
                else {
                    return true;
                }
            }
        }

        public function validateAddress() {
            if (empty($this->FirstAddress)) {
                echo "Wrong input of First Address: " . $this->FirstAddress . "<br>";
                return false;
            }
            else {
                return true;
            }
        }

        public function validateCity() {
            if (empty($this->City)) {
                echo "City is empty. <br>";
                return false;
            } 
            else {
                if (!preg_match('/^[\p{L&} -]+$/u', $this->City)) {
                    echo "Wrong input of City: " . $this->City . "<br>";
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
                if (!preg_match('/^[\p{L&} -]+$/u', $this->State)) {
                    echo "Wrong input of State: " . $this->State . "<br>";
                    return false;
                } else {
                    return true;
                }
            }
        }
        public function validateZip() {
            if(empty($this->Zip)) {
                echo "Zip is empty. <br>";
                return false;
            }
            else {
                if (!is_numeric($this->Zip) || strlen($this->Zip) < 5 || strlen($this->Zip) > 9) {
                    echo "Wrong input of ZipCode: " . $this->Zip . "<br>";
                }
                else {
                    return true;
                }
            }
        }

        public function AllFieldsValid($NameValid, $firstAddressValid, $CityValid, $StateValid, $ZipValid) {
            if($NameValid && $firstAddressValid && $CityValid && $StateValid && $ZipValid) {
                return true;
            }
            else {
                return false;
            }
        }
    }

    function sendToDatabase() {
        //preparing to persist to database
        /*
        $db = mysqli_connect("hostname", "username", "password", "database");
        $query = "Query goes here";
        $result = mysqli_query($db, $query); */
    }

    $ManageRequest = new ValidateProfile($_POST["fullName"], $_POST["firstAddress"], $_POST["city"], $_POST["State"], $_POST["ZipCode"]);
    $NM = $ManageRequest->validateName();
    $FA = $ManageRequest->validateAddress();
    $CT = $ManageRequest->validateCity();
    $ST = $ManageRequest->validateState();
    $ZC = $ManageRequest->validateZip();
    if($ManageRequest->AllFieldsValid($NM,$FA, $CT, $ST, $ZC)) {
        echo "Correct inputs <br>"; 
        //sendToDatabase();
    } 

    ?>


</body>

</html>