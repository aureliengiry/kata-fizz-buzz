<?php

namespace Kata;


class FizzBuzzEngine
{
    public function run(int $number)
    {
        if ($this->isFizz($number)) {
            return 'Fizz';
        } elseif (5 === $number) {
            return 'Buzz';
        }
        return $number;
    }

    private function isFizz(int $number){
        return $number % 3 === 0;
    }
}