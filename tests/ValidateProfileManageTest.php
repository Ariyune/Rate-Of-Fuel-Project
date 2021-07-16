<?php


use PHPUnit\Framework\TestCase;

class ValidateProfileManageTest extends TestCase
{

    public function testValidEntries() //checks if having valid entries sets boolean return value to true for respective form field
    {
        //enter in valid values, should return a true boolean
        $ProfileManage = new ValidateProfileManage ("Carlos", "12345 Random Address", "temp", "Houston", "TX", 12345);
        $resultvalidateName = $ProfileManage->validateName();
        $resultvalidateAddress = $ProfileManage->validateAddress();
        $resultvalidateCity = $ProfileManage->validateCity();
        $resultvalidateState = $ProfileManage->validateState();
        $resultvalidateZip = $ProfileManage->validateZip();

        $this->assertTrue($resultvalidateName);
        $this->assertTrue($resultvalidateAddress);
        $this->assertTrue($resultvalidateCity);
        $this->assertTrue($resultvalidateState);
        $this->assertTrue($resultvalidateZip);
    }

    public function testemptyEntries() //checks if empty entries returns no value (expected)
    {
        $ProfileManage = new ValidateProfileManage (null, null, null, null, null, null);
        $resultvalidateName = $ProfileManage->validateName();
        $resultvalidateAddress = $ProfileManage->validateAddress();
        $resultvalidateCity = $ProfileManage->validateCity();
        $resultvalidateState = $ProfileManage->validateState();
        $resultvalidateZip = $ProfileManage->validateZip();

        $this->assertFalse($resultvalidateName);
        $this->assertFalse($resultvalidateAddress);
        $this->assertFalse($resultvalidateCity);
        $this->assertFalse($resultvalidateState);
        $this->assertFalse($resultvalidateZip);
    }

    public function testAllFieldsValid()
    {
        $ProfileManageValid = new ValidateProfileManage ("Carlos", "12345 Random Address", "temp", "Houston", "TX", 12345);
        $N = $ProfileManageValid->validateName();
        $A = $ProfileManageValid->validateAddress();
        $C = $ProfileManageValid->validateCity();
        $S = $ProfileManageValid->validateState();
        $Z = $ProfileManageValid->validateZip();
        $validinput = $ProfileManageValid->AllFieldsValid($N,$A,$C,$S,$Z);

        $ProfileManageInvalid = new ValidateProfileManage (null, null, null, null, null, null);
        $N1 = $ProfileManageInvalid->validateName();
        $A1 = $ProfileManageInvalid->validateAddress();
        $C1 = $ProfileManageInvalid->validateCity();
        $S1 = $ProfileManageInvalid->validateState();
        $Z1 = $ProfileManageInvalid->validateZip();
        $invalidinput = $ProfileManageInvalid->AllFieldsValid($N1,$A1,$C1,$S1,$Z1);

        $this->assertTrue($validinput);
        $this->assertFalse($invalidinput);
    }

    public function testlengthFieldsValid() {
        //test first address length
        $ProfileManageTooLong = new ValidateProfileManage ("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "a", "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "TX", 1111111111);
        $resultvalidateName = $ProfileManageTooLong->validateName();
        $resultvalidateAddress = $ProfileManageTooLong->validateAddress();
        $resultvalidateCity = $ProfileManageTooLong->validateCity();
        $resultvalidateState = $ProfileManageTooLong->validateState();
        $resultvalidateZip = $ProfileManageTooLong->validateZip();

        $this->assertFalse($resultvalidateName);
        $this->assertFalse($resultvalidateAddress);
        $this->assertFalse($resultvalidateCity);
        $this->assertFalse($resultvalidateZip);

        //test second address length
        $ProfileManageTooLong->FirstAddress = "a";
        $ProfileManageTooLong->SecondAddress = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $resultvalidateAddress = $ProfileManageTooLong->validateAddress();

        $this->assertFalse($resultvalidateAddress);

        //test both address length
        $ProfileManageTooLong->FirstAddress = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $ProfileManageTooLong->SecondAddress = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $resultvalidateAddress = $ProfileManageTooLong->validateAddress();

        $this->assertFalse($resultvalidateAddress);

        $ProfileManageTooShort = new ValidateProfileManage ("a", "a", "a", "a", "TX", 1111);
        $resultvalidateZip1 = $ProfileManageTooShort->validateZip();

        $this->assertFalse($resultvalidateZip1);
    }
}
