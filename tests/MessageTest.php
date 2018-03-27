<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Projects\Texts\Message;

/**
 * Class MessageTest.
 */
class MessageTest extends TestCase
{
    /**
     * Message class instance
     *
     * @var \Projects\Texts\Message
     */
    private $message;

    public function setup()
    {
        $this->message = new Message('en');
    }

    public function testMessageOfTheDayContructor()
    {
        $this->assertInstanceOf(Message::class, $this->message);
    }

    public function testMessageOfTheDayReturn() {
        $this->assertEquals('An apple a day, keeps the doctor away', $this->message->getMessageOfTheDay());
    }


}
