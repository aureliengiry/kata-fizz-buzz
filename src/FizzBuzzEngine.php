<?php

namespace Kata;


class FizzBuzzEngine
{
    public function run(int $number)
    {
        if ($this->isFizz($number)) {
            return 'Fizz';
        } elseif ($this->isBuzz($number)) {
            return 'Buzz';
        }
        return $number;
    }

    private function isFizz(int $number): bool
    {
        return $number % 3 === 0;
    }

    private function isBuzz(int $number): bool
    {
        return $number % 5 === 0;
    }
}