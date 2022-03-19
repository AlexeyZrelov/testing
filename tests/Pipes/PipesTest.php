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
}