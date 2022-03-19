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

    public function green($input): array
    {
        $arr = $this->getChars();
        return array_keys($arr, $input);
    }

    public function yellow($input): bool
    {
        $arr = $this->getChars();
        return in_array($input, $arr) ?? false;
    }

    public function gray($input): bool
    {
        $arr = $this->getChars();
        return !in_array($input, $arr);
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