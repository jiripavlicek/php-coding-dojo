<?php

class StringCalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function testCanCreateInstance() {
        $stringCalculator = new StringCalculator();
        $this->assertInstanceOf('StringCalculator', $stringCalculator);
    }

    /**
     * @test
     */
    public function testCalcEmpty() {
        $stringCalculator = new StringCalculator();
        $this->assertSame(0, $stringCalculator->calc(''));
    }

    /**
     * @test
     * @dataProvider dataProviderCalc
     */
    public function testCalc($formula, $expected) {
        $stringCalculator = new StringCalculator();
        $this->assertEquals($expected, $stringCalculator->calc($formula), '', 0.0001);
    }

    public function dataProviderCalc()
    {
        return [
            ['1+1', 2],
            ['0+0', 0],
            ['0+1', 1],
            ['1+0', 1],
            ['1+2', 3],
            ['11+22', 33],
            ['2-1', 1],
            ['1-2', -1],
            ['2*3', 6],
            ['31*123', 3813],
            ['-1+1', 0],
            ['-1+2', 1],
            ['-2*3', -6],
            ['+2*3', 6],
            ['2*-3', -6],
            ['10/5', 2],
            ['10/3', 3.33333],
            ['1.1+3', 4.1],
            ['2.12+3.234', 5.354],
            ['1.1+3.2', 4.3],
            ['-1.1+3.2', 2.1],
        ];
    }
}
