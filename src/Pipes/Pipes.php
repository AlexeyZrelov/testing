<?php

namespace App\Pipes;

class Pipes
{
    private array $cell = [];
    private array $board = [];

    public function __construct()
    {

        foreach (range(1, 16) as $i => $v) {
            $this->board[$i] = ['up', 'right', 'down', 'left'];
        }
    }

    public function getBoard(): array
    {
        return $this->board;
    }

}