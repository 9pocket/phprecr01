<?php

use Exercise\Ex4;
use Model\Category;
use Model\CategoryRepository;

class Ex4Test extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                CategoryRepository::findAll(),
                [
                    'Hardware @ Computer @ Motherboard',
                    'Hardware @ Computer @ Disk',
                    'Hardware @ Computer @ Memory',
                    'Software @ OS @ Windows @ Server 2008',
                    'Software @ OS @ Windows @ Server 2010',
                    'Software @ OS @ Linux @ Debian',
                    'Software @ Database @ MS SQL Server',
                    'Software @ Database @ Oracle @ Oracle Database',
                    'Software @ Database @ Oracle @ MySQL',
                ]
            ],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param Category $c
     * @param string[] $expected
     */
    public function testPath(Category $c, $expected)
    {
        $this->assertEquals(
            $expected,
            Ex4::path($c, ' @ '),
            sprintf('Got %s, expected %s', print_r(Ex4::path($c, ' @ '), true), print_r($expected, true))
        );
    }
}
