<?php

class ExchangeTwoVariablesValuesTest extends PHPUnit_Framework_TestCase {

    public function testCanCreateInstance() {
        $exchangeTwoVariablesValues = new ExchangeTwoVariablesValues();
        $this->assertInstanceOf('ExchangeTwoVariablesValues', $exchangeTwoVariablesValues);
    }

    /**
     * @dataProvider dataProviderValues
     */
    public function testExchangeValues($a, $b, $expected) {
        $exchangeTwoVariablesValues = new ExchangeTwoVariablesValues();
        $this->assertSame($expected, $exchangeTwoVariablesValues->exchangeValues($a, $b));
    }

    /**
     * @dataProvider dataProviderValues
     */
    public function testExchangeValuesOneLiner($a, $b, $expected) {
        $exchangeTwoVariablesValues = new ExchangeTwoVariablesValues();
        $this->assertSame($expected, $exchangeTwoVariablesValues->exchangeValuesOneLiner($a, $b));
    }

    public function dataProviderValues()
    {
        return [
            [0, 0, [0, 0]],
            [0, 1, [1, 0]],
            [1, 1, [1, 1]],
            [1, 0, [0, 1]],
            [1, 2, [2, 1]],
            [1, 10, [10, 1]],
            [1.123456, 3.0, [3.0, 1.123456]],
            [2, 3, [3, 2]],
            [10, 20, [20, 10]],
            [-2, 3, [3, -2]],
        ];
    }
}
