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
        $result = $this->calculator->stringCalculator(1);
        $expected = 1;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_5_set_5()
    {
        $result = $this->calculator->stringCalculator(5);
        $expected = 5;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_3_set_1_and_2()
    {
        $result = $this->calculator->stringCalculator('1,2');
        $expected = 3;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_6_set_1_2_and_3()
    {
        $result = $this->calculator->stringCalculator('1,2,3');
        $expected = 6;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_6_set_1_newLine_2_and_3()
    {
        $result = $this->calculator->stringCalculator('1\n2,3');
        $expected = 6;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_3_set_simbols_1_and_2()
    {
        $result = $this->calculator->stringCalculator('//;\n1;2');
        $expected = 3;
        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function get_3_set_negative_1_and_2()
    {
        $result = $this->calculator->stringCalculator('-1,1,2');
        $expected = 3;
        $this->assertEquals($expected, $result);
    }
}
