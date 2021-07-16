<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setPassword('password')
            ->setConfirmPassword('confirmpassword')
            ->setFirstName('firstname')
            ->setLastName('lastname')
            ->setAddress('address')
            ->setPhone('phone');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getConfirmPassword() === 'confirmpassword');
        $this->assertTrue($user->getFirstName() === 'firstname');
        $this->assertTrue($user->getLastName() === 'lastname');
        $this->assertTrue($user->getAddress() === 'address');
        $this->assertTrue($user->getPhone() === 'phone');
    }

        public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('true@test.com')
            ->setPassword('password')
            ->setConfirmPassword('confirmpassword')
            ->setFirstName('firstname')
            ->setLastName('lastname')
            ->setAddress('address')
            ->setPhone('phone');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getConfirmPassword() === 'false');
        $this->assertFalse($user->getFirstName() === 'false');
        $this->assertFalse($user->getLastName() === 'false');
        $this->assertFalse($user->getAddress() === 'false');
        $this->assertFalse($user->getPhone() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getConfirmPassword());
        $this->assertEmpty($user->getFirstName());
        $this->assertEmpty($user->getLastName());
        $this->assertEmpty($user->getAddress());
        $this->assertEmpty($user->getPhone());
    }
}
