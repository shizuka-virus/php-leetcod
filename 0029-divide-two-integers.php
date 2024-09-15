<?php

/**
 * 29. Divide Two Integers
 * https://leetcode.com/problems/divide-two-integers/
 */

class Solution
{
    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor)
    {
        $res = intdiv($dividend, $divisor);
        if ($res >= 2 ** 31) return 2 ** 31 - 1;
        if ($res < -2 ** 31) return -2 ** 31;
        return $res;
    }
}