<?php
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    public function testRegistration(): void
    {
        $fullname = 'Huynh Hau';
        $address= 'Quan 12';
        $email = 'hhau050501@gmail.com';
        $username = 'hau';
        $password = '123';
        $userRegistration = new App\controllers\UserRegistration();
        $result = $userRegistration->register($fullname, $address, $email, $username, $password);

        $this->assertTrue($result);
    }
    public function testInvalidRegistration(): void
    {
        $fullname = 'Huynh Hau';
        $address= 'Quan 12';
        $email = 'hhau050501@gmail.com';
        $username = 'hau';
        $password = 'wrongpassword';
        $userRegistration = new App\controllers\UserRegistration();
        $result = $userRegistration->register($fullname, $address, $email, $username, $password);

        $this->assertFalse($result);
    }
}