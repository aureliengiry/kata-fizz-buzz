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
     * @dataProvider provideNumberDivisibleByThree
     */
    public function numberDivisibleByThreeReturnsFizz(int $number){
        $this->assertSame('Fizz', $this->fizzBuzzEngine->run($number));
    }

    public function provideNumberDivisibleByThree(){
        yield [3];
        yield [6];
        yield [12];
    }

    /**
     * @test
     * @dataProvider provideNumberDivisibleByFive
     */
    public function numberDivisibleByFiveReturnsBuzz(int $number){
        $this->assertSame('Buzz', $this->fizzBuzzEngine->run($number));
    }

    public function provideNumberDivisibleByFive(){
        yield [5];
        yield [10];
        yield [20];
    }
}


