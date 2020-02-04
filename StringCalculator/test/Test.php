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
        $result = $this->calculator->getStringAndSetZero('Hola');

        $expected = 0;
        $this->assertEquals($expected, $result);
    }

}
