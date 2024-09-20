<?php

/**
 * 342. Power of Four
 * https://leetcode.com/problems/power-of-four/
 */

class Solution
{
    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour($num)
    {
        while ($num >= 4) {
            $num = $num / 4;
        }
        return $num == 1;
    }
}