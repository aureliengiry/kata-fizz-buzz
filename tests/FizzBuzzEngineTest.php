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
    public function oneReturnOne(){
        $this->assertSame(1, $this->fizzBuzzEngine->run(1));
    }
}


