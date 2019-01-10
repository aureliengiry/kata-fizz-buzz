<?php

namespace Kata;


class FizzBuzzEngine
{
    public function run(int $value)
    {
        if(3 === $value){
            return 'Fizz';
        }
        
        return $value;
    }
}