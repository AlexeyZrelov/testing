<?php

namespace App\Wordle;

class Wordle
{
    private array $chars = [];
    private string $word;
    private array $color;

    public function __construct()
    {
        $this->word = "ARISE";
        $this->chars = str_split($this->word);
        $this->color  = ["green", "yellow", "gray"];
    }

    public function green($input): string
    {
        $arr = $this->getChars();
        $arrInput = array_keys($arr, $input);
        return count($arrInput) != 0 ? $this->color[0] : '';
    }

    public function yellow($input): string
    {
        $arr = $this->getChars();
        return in_array($input, $arr) ? $this->color[1] : '';
    }

    public function gray($input): string
    {
        $arr = $this->getChars();
        return !in_array($input, $arr) ? $this->color[2] : '';
    }

    public function word($input): bool
    {
        $arrInput = str_split($input);
        return $this->getChars() === $arrInput;
    }

    public function getChars(): array
    {
        return $this->chars;
    }

}