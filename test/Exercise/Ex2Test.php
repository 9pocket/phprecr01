<?php

use Exercise\Ex2;
use Model\Loan;

class Ex2Test extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                [
                    new Loan('Mark', 100.00),
                    new Loan('Jeffrey', 25.00),
                    new Loan('Kate', 125.00),
                    new Loan('Jimmy', 500.00),
                    new Loan('Victoria', 15.25),
                ],
                ['Jimmy']
            ],
            [
                [
                    new Loan('Kate', 15.00),
                    new Loan('Lucy', 35.75),
                    new Loan('Steven', 15.00),
                    new Loan('Alice', 35.75),
                ],
                ['Lucy', 'Alice']
            ],
            [
                [
                    new Loan('Paul', 7.50),
                    new Loan('John', 20.00),
                    new Loan('Paul', 7.50),
                    new Loan('Paul', 7.50),
                ],
                ['Paul']
            ],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param $loans
     * @param $expected
     */
    public function testPersonWithMaxLoan($loans, $expected)
    {
        $this->assertEquals(
            $expected,
            Ex2::personWithMaxLoan($loans),
            sprintf('Got %s, expected %s', print_r(Ex2::personWithMaxLoan($loans), true), print_r($expected, true))
        );
    }
}
