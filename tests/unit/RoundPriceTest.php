<?php

use function Kopirka\roundPrice;

class RoundPriceTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @dataProvider cellDataProvider
     * @param $value
     */
    public function testRoundPrice($expected, $value)
    {
        $this->assertEquals($expected, roundPrice($value));
    }

    /**
     * @return array
     */
    public function cellDataProvider(): array {
        return [
            ['8', 8.4],
            ['9', 8.5],
            ['25', 24],
            ['525', 523],
            ['-100', -100]
        ];
    }
}