<?php


use PHPUnit\Framework\TestCase;

class ValidateRegisterTest extends TestCase
{
    public function testemptyEntries() //checks if empty entries returns no value (expected)
    {
        //input in null, should return empty/no value
        $RegisterEmpty = new ValidateRegister (null, null);

        $resultUser = $RegisterEmpty->validateUsername();
        $resultPassword = $RegisterEmpty->validatePassword();

        $this->assertFalse($resultUser);
        $this->assertFalse($resultPassword);

    }
    public function testAllFieldsValid()
    {
        $RegisterValid = new ValidateRegister ("Billy", "1234");
        $resultUserValid = $RegisterValid->validateUsername();
        $resultPasswordValid = $RegisterValid->validatePassword();
        $validinput = $RegisterValid->validateAllFields($resultUserValid,$resultPasswordValid);

        $RegisterInvalid = new ValidateRegister (null, null);
        $resultUserInvalid = $RegisterInvalid->validateUsername();
        $resultPasswordInvalid = $RegisterInvalid->validatePassword();
        $invalidinput = $RegisterInvalid->validateAllFields($resultUserInvalid,$resultPasswordInvalid);

        $this->assertTrue($validinput);
        $this->assertFalse($invalidinput);
    }
}
