<?php

use function Kopirka\getCell;

class GetCellTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @dataProvider cellDataProvider
     * @param $x
     * @param $y
     */
    public function testGetCell($expected, $x, $y)
    {
        $this->assertEquals($expected, getCell($x, $y));
    }

    /**
     * @return array
     */
    public function cellDataProvider(): array
    {
        return [
            ['A1', 1, 1],
            ['Z26', 26, 26],
            ['AB100', 28, 100],
            ['BC3', 55, 3],
            ['D4', 4, 4]
        ];
    }
}