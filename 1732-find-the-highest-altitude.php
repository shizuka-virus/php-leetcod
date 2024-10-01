<?php

/**
 * 1732. Find the Highest Altitude
 * https://leetcode.com/problems/find-the-highest-altitude/
 */

class Solution
{
    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain)
    {
        $now = 0;
        $max = 0;
        foreach ($gain as $v) {
            $now += $v;
            $max = max($max, $now);
        }
        return $max;
    }
}