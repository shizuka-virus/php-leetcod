<?php

/**
 * 1342. Number of Steps to Reduce a Number to Zero
 * https://leetcode.com/problems/number-of-steps-to-reduce-a-number-to-zero/
 */

class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num)
    {
        $steps = 0;
        while ($num) {
            $num = $num % 2 ? $num - 1 : $num / 2;
            $steps++;
        }
        return $steps;
    }
}