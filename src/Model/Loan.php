<?php

namespace Model;

class Loan
{
    /** @var string */
    protected $person;
    /** @var float */
    protected $amount;

    /**
     * Loan constructor.
     * @param $person
     * @param $amount
     * @throws \Exception
     */
    public function __construct($person, $amount)
    {
        $this->person = $person;
        if(!is_numeric($amount) || $amount < 0) {
            throw new \Exception('Amount should be a numeric value higher than 0');
        }
        $this->amount = (float)$amount;
    }

    /**
     * @return string
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s: %f', $this->person, $this->amount);
    }
}
