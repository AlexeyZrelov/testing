<?php

namespace App\Pipes;

class Pipes
{
    private array $cell = [];
    private array $board = [];

    public function __construct()
    {
        $this->cell = ['up', 'right', 'down', 'left'];
        foreach (range(1, 16) as $i => $v) {
            $this->board[$i] = ['up', 'right', 'down', 'left'];
        }

    }

    public function getCell(): array
    {
        return $this->cell;
    }

    public function getBoard(): array
    {
        return $this->board;
    }

    public function Up(): string
    {
        return $this->board[0][0];
    }

    public function Right(): string
    {
        return $this->board[0][1];
    }

    public function Down(): string
    {
        return $this->board[0][2];
    }

    public function Left(): string
    {
        return $this->board[0][3];
    }

    public function UpDown(): array
    {
        return [$this->board[0][0], $this->board[0][2]];
    }

    public function LeftRight(): array
    {
        return [$this->board[0][3], $this->board[0][1]];
    }

    public function LeftRightDown(): array
    {
        return [$this->board[0][3], $this->board[0][1],  $this->board[0][2]];
    }

    public function LeftRightUp(): array
    {
        return [$this->board[0][3], $this->board[0][1],  $this->board[0][0]];
    }
}