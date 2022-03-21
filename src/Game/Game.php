<?php

namespace App\Game;

class Game
{
    private array $board = [];

    public function __construct()
    {
        $this->board = range(1, 16);
    }

    public function getBoard(): array
    {
        return $this->board;
    }

}