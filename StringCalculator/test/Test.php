<?php

namespace Refactoring;

use StringCalculatorTest;

class Test extends \PHPUnit_Framework_TestCase
{
    public $calculator;
    public function setUp()
    {
        $this->calculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function get_0_when_array_empty()
    {
        $result = $this->calculator->stringCalculator('');
        $expected = 0;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_1_set_1()
    {
        $result = $this->calculator->stringCalculator('');
        $expected = 1;
        $this->assertEquals($expected, $result);
    }

}
