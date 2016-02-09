<?php

namespace prime;

require_once 'Solution.php';

class TestSolution extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testIsPrime($actual, $number)
    {
        $this->assertEquals($actual, Solution\isPrime($number));
    }

    public function additionProvider()
    {
        return [
            [true, 2],
            [true, 3],
            [false, 4],
            [true, 5]
        ];
    }
}
