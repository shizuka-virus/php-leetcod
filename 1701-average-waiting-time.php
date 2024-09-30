<?php

/**
 * 1701. Average Waiting Time
 * https://leetcode.com/problems/average-waiting-time/
 *
 * https://leetcode.com/problems/average-waiting-time/discuss/987324/PHP-Simple-solution
 */

class Solution
{
    /**
     * @param Integer[][] $customers
     * @return Float
     */
    function averageWaitingTime($customers)
    {
        $waiting = [];

        $i = 0;
        $time = 0;
        $count = count($customers);

        while ($i < $count) {
            if ($customers[$i][0] > $time) $time = $customers[$i][0];
            $waiting[] = $time - $customers[$i][0] + $customers[$i][1];
            $time += $customers[$i][1];
            $i++;
        }

        return array_sum($waiting) / count($waiting);
    }
}