<?php

/**
 * 70. Climbing Stairs
 * https://leetcode.com/problems/climbing-stairs/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n <= 2) return $n;

        $prev = 1;
        $now = 2;

        for ($i = 3; $i <= $n; $i++)
            [$now, $prev] = [$now + $prev, $now];

        return $now;
    }
}