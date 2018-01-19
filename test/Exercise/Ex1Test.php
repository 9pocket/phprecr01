<?php

use Exercise\Ex1;
use Model\Streak;

class Ex1Test extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                [
                    1, 1, 1, 0, 0, 0, 0, 1, 1
                ],
                new Streak(Streak::LOSE, 4)
            ],
            [
                [
                    1, 0, 1, 0, 1, 0, 1, 0, 1
                ],
                new Streak(Streak::WIN, 1)
            ],
            [
                [
                    1, 0, 0, 0, 0, 0, 0, 0, 0
                ],
                new Streak(Streak::LOSE, 8)
            ],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param $records
     * @param $expected
     */
    public function testPlayerRecord($records, $expected)
    {
        $this->assertTrue(
            Ex1::playerRecord($records)->isEqualTo($expected),
            sprintf('Got %s, expected %s', Ex1::playerRecord($records), $expected, true)
        );
    }
}
