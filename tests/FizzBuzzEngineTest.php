<?php
namespace Kata\Tests;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzzEngine;

class FizzBuzzEngineTest extends TestCase
{

    /** @var FizzBuzzEngine */
    protected $fizzBuzzEngine;

    protected function setUp()
    {
        $this->fizzBuzzEngine = new FizzBuzzEngine();
    }

    /**
     * @test
     */
    public function oneReturnsOne(){
        $this->assertSame(1, $this->fizzBuzzEngine->run(1));
    }

    /**
     * @test
     */
    public function twoReturnsTwo(){
        $this->assertSame(2, $this->fizzBuzzEngine->run(2));
    }

    /**
     * @test
     */
    public function fourReturnsFour(){
        $this->assertSame(4, $this->fizzBuzzEngine->run(4));
    }

    /**
     * @test
     */
    public function fiveReturnsBuzz(){
        $this->assertSame('Buzz', $this->fizzBuzzEngine->run(5));
    }

    /**
     * @test
     * @dataProvider provideNumberDivisibleBy3
     */
    public function numberDivisibleBy3ReturnsFizz(int $number){
        $this->assertSame('Fizz', $this->fizzBuzzEngine->run($number));
    }

    public function provideNumberDivisibleBy3(){
        yield [3];
        yield [6];
    }
}


