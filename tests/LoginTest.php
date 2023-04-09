<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testValidLogin(): void
    {
        $username = 'anh';
        $password = '123';

        $authenticator = new App\controllers\Authenticator();
        $result = $authenticator->authenticate($username, $password);

        $this->assertTrue($result, 'Valid login credentials should authenticate');
    }

    public function testInvalidLogin(): void
    {
        $username = 'anh';
        $password = 'wrongpassword';

        $authenticator = new App\controllers\Authenticator();
        $result = $authenticator->authenticate($username, $password);

        $this->assertFalse($result, 'Invalid login credentials should not authenticate');
    }
}
