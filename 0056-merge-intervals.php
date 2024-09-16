<?php

/**
 * 56. Merge Intervals
 * https://leetcode.com/problems/merge-intervals/
 *
 * https://leetcode.com/problems/merge-intervals/discuss/940682/PHP-Easy-sort-and-merge
 */

class Solution
{
    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals)
    {
        usort($intervals, function ($a, $b) {
            return $b[1] < $a[1] ? 1 : 0;
        });

        $i = count($intervals);

        while ($i-- > 1)
            if ($intervals[$i - 1][0] <= $intervals[$i][1] && $intervals[$i - 1][1] >= $intervals[$i][0]) {
                if ($intervals[$i - 1][0] > $intervals[$i][0]) $intervals[$i - 1][0] = $intervals[$i][0];
                if ($intervals[$i - 1][1] < $intervals[$i][1]) $intervals[$i - 1][1] = $intervals[$i][1];
                unset($intervals[$i]);
            }

        return array_values($intervals);
    }
}