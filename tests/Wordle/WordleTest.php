<?php

use App\Wordle\Wordle;
use PHPUnit\Framework\TestCase;

class WordleTest extends TestCase
{

    public function testGreen()
    {
        $a = new Wordle(); // "ARISE"
        $arr = $a->getChars();
        $key = $a->green('S');
        $this->assertArrayHasKey($key[0], $arr, "Should be equals index");
    }

    public function testYellow()
    {
        $a = new Wordle();
        $char = $a->yellow('S'); // "ARISE"
        $this->assertTrue($char, "Should be in the word");
    }

    public function testGray()
    {
        $a = new Wordle();
        $char = $a->gray('C'); // "ARISE"
        $this->assertTrue($char, " Should not be in the word");
    }

    public function testWord()
    {
        $a = new Wordle();
        $this->assertTrue($a->word("ARISE"), "Should be same as input");
    }
}