<?php

/**
 * 754. Reach a Number
 * https://leetcode.com/problems/reach-a-number/
 */

class Solution
{
    /**
     * @param Integer $target
     * @return Integer
     */
    function reachNumber($target)
    {
        $n = ceil((1 + sqrt(1 + 8 * abs($target))) / 2 - 1);
        $x = ($n * ($n + 1) / 2) - abs($target);
        return $n + ($x % 2 ? 1 + $n % 2 : 0);
    }
}