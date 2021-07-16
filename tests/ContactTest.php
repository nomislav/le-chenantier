<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Contact;

class ContactTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new Contact();

        $user->setEmail('true@test.com')
            ->setMessage('message')
            ->setName('name')
            ->setPhone('phone');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getMessage() === 'message');
        $this->assertTrue($user->getName() === 'name');
        $this->assertTrue($user->getPhone() === 'phone');
    }

        public function testIsFalse()
    {
        $user = new Contact();

        $user->setEmail('true@test.com')
            ->setMessage('password')
            ->setName('firstname')
            ->setPhone('phone');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getMessage() === 'false');
        $this->assertFalse($user->getName() === 'false');
        $this->assertFalse($user->getPhone() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new Contact();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getMessage());
        $this->assertEmpty($user->getName());
        $this->assertEmpty($user->getPhone());
    }
}
