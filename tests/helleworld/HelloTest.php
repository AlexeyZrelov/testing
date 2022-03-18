<?php

use App\Helloworld\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testSay()
    {
        // Expected
        $expected = 'helloworld';

        // Actual
        $results = new Hello();
        $actual = $results->say();

        // Assert
        $this->assertSame($expected, $actual);
    }
}