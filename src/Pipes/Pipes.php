<?php

namespace App\Pipes;

class Pipes
{
    private array $direction;
    private array $board = [];

    public function __construct()
    {
        $this->direction = ['up', 'down', 'left', 'right'];
        $this->board = range(1, 16);
    }


}