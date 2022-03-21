<?php

namespace Pipes;

use App\Pipes\Pipes;
use PHPUnit\Framework\TestCase;

class PipesTest extends TestCase
{
    public function testCountBoard()
    {
        $a = new Pipes();
        $count = count($a->getBoard());
        $this->assertEquals(16, $count, "Should be 16 cells");
    }

    public function testBoardCellNotEmpty()
    {
        $a = new Pipes();
        $board = $a->getBoard();
        $cell = $a->getCell();
//        $cell = 0;

        foreach ($board as $i => $v) {
            if ($v === $cell) {
                $this->assertSame($cell, $v, "Should not be empty");
            }
        }
    }

    public function testUp()
    {
        $a = new Pipes();
        $board = $a->getBoard();
        $cell = $a->Up();
        $this->assertSame($board[0][0], $cell);
    }

    public function testRight()
    {
        $a = new Pipes();
        $board = $a->getBoard();
        $cell = $a->Right();
        $this->assertSame($board[0][1], $cell);
    }

    public function testDown()
    {
        $a = new Pipes();
        $board = $a->getBoard();
        $cell = $a->Down();
        $this->assertSame($board[0][2], $cell);
    }

    public function testLeft()
    {
        $a = new Pipes();
        $board = $a->getBoard();
        $cell = $a->Left();
        $this->assertSame($board[0][3], $cell);
    }

    public function testUpDown()
    {
        $a = new Pipes();
        $board = $a->UpDown();
        $cell = ["up", "down"];
        $this->assertSame($board, $cell);
    }

    public function testLeftRight()
    {
        $a = new Pipes();
        $board = $a->LeftRight();
        $cell = ["left", "right"];
        $this->assertSame($board, $cell);
    }

    public function testLeftRightDown()
    {
        $a = new Pipes();
        $board = $a->LeftRightDown();
        $cell = ["left", "right", "down"];
        $this->assertSame($board, $cell);
    }

    public function testLeftRightUp()
    {
        $a = new Pipes();
        $board = $a->LeftRightUp();
        $cell = ["left", "right", "up"];
        $this->assertSame($board, $cell);
    }
}