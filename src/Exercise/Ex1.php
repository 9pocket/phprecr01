<?php

namespace Exercise;

use Model\Streak;

class Ex1
{
    /**
     * Each array element represents a result of a player match showing either win (1) or lose (0)
     * Return the maximum winning or losing streak, that is the number of consecutive elements showing the same result
     * @param array $records
     * @return Streak
     */
    public static function playerRecord(array $records)
    {
        // not implemented yet
        return new Streak(Streak::WIN, 999);
    }
}
