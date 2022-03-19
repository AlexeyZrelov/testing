<?php

use App\Wordle\Wordle;
use PHPUnit\Framework\TestCase;

class WordleTest extends TestCase
{

    public function testGreen()
    {
        $a = new Wordle(); // "ARISE"
        $arr = $a->green('E');
        $this->assertSame('green', $arr, "Should be equals index and value");
    }

    public function testYellow()
    {
        $a = new Wordle();
        $arr = $a->yellow('I'); // "ARISE"
        $this->assertSame('yellow', $arr, "Should be equals value");
    }

    public function testGray()
    {
        $a = new Wordle();
        $arr = $a->gray('B'); // "ARISE"
        $this->assertSame('gray', $arr, "Not in the array");
    }

    public function testWord()
    {
        $a = new Wordle();
        $this->assertTrue($a->word("ARISE"), "Word should be same as input");
    }
}