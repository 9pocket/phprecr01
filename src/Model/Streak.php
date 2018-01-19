<?php

namespace Model;

class Streak
{
    const WIN = 1;
    const LOSE = 0;

    /** @var int */
    protected $result;
    /** @var int */
    protected $length;

    public function __construct($result, $length)
    {
        if(!in_array($result, [self::WIN, self::LOSE])) {
            throw new \Exception('Result must be a win or a lose.');
        }
        $this->result = $result;

        $length = (int) $length;
        if(!($length > 0)) {
            throw new \Exception('Length must be greater than zero.');
        }
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function resultLabel()
    {
        switch ($this->result) {
            case self::WIN:
                return 'W';
            case self::LOSE:
                return 'L';
        }
    }

    /**
     * @return int
     */
    public function length()
    {
        return $this->length;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s%d', $this->resultLabel(), $this->length);
    }

    /**
     * @param Streak $other
     * @return bool
     */
    public function isEqualTo(Streak $other)
    {
        if($this->resultLabel() === $other->resultLabel() && $this->length() === $other->length()) {
            return true;
        }

        return false;
    }
}
