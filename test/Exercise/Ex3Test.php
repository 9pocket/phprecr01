<?php

use Exercise\Ex3;
use Model\ColorDict;

class Ex3Test extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                []
            ],
            [
                'A deep teal is the world\'s favourite colour, according to survey',
                ['teal']
            ],
            [
                'iPhone 6: Gold or Silver?',
                ['gold', 'silver']
            ],
            [
                'Again a repeat: ORANGE is the new black! I have never mentioned violet...',
                ['orange', 'black', 'violet']
            ],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param string $text
     * @param array $expected
     */
    public function testWordLookup($text, $expected)
    {
        $dictionary = ColorDict::findAll();

        $this->assertEquals(
            $expected,
            Ex3::wordLookup($text, $dictionary),
            sprintf('Got %s, expected %s', print_r(Ex3::wordLookup($text, $dictionary), true), print_r($expected, true))
        );
    }
}
