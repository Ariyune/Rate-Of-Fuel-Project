<?php


use PHPUnit\Framework\TestCase;

class ValidateLogInTest extends TestCase
{
    public function testemptyEntries() //checks if empty entries returns no value (expected)
    {
        //input in null, should return empty/no value
        $LogInEmpty = new ValidateLogIn (null, null);

        $resultUser = $LogInEmpty->validateUsername();
        $resultPassword = $LogInEmpty->validatePassword();

        $this->assertFalse($resultUser);
        $this->assertFalse($resultPassword);

    }
    public function testAllFieldsValid()
    {
        $LogInValid = new ValidateLogIn ("Billy", "1234");
        $resultUserValid = $LogInValid->validateUsername();
        $resultPasswordValid = $LogInValid->validatePassword();
        $validinput = $LogInValid->validateAllFields($resultUserValid,$resultPasswordValid);

        $LogInInvalid = new ValidateLogIn (null, null);
        $resultUserInvalid = $LogInInvalid->validateUsername();
        $resultPasswordInvalid = $LogInInvalid->validatePassword();
        $invalidinput = $LogInInvalid->validateAllFields($resultUserInvalid,$resultPasswordInvalid);

        $this->assertTrue($validinput);
        $this->assertFalse($invalidinput);
    }
}

