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
    public function threeReturnsFizz(){
        $this->assertSame('Fizz', $this->fizzBuzzEngine->run(3));
    }
}


