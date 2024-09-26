<?php

/**
 * 1288. Remove Covered Intervals
 * https://leetcode.com/problems/remove-covered-intervals/
 */

class Solution
{
    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function removeCoveredIntervals($intervals)
    {
        usort($intervals, function ($a, $b) {
            return $a[0] > $b[0] || ($a[0] == $b[0] && $a[1] < $b[1]) ? 1 : -1;
        });

        for ($i = count($intervals) - 1; $i; $i--) {
            $k = $i - 1;
            while ($k >= 0 && $intervals[$i][0] >= $intervals[$k][0]) {
                if ($intervals[$i][1] <= $intervals[$k][1]) {
                    unset($intervals[$i]);
                    break;
                }
                $k--;
            }
        }

        return count($intervals);
    }
}