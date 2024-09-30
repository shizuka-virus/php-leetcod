<?php

/**
 * 1716. Calculate Money in Leetcode Bank
 * https://leetcode.com/problems/calculate-money-in-leetcode-bank/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function totalMoney($n)
    {
        $sum = 0;
        for ($i = 1, $add = 0, $v = 0; $i <= $n; $i++) {
            $v++;
            if ($v > 7) {
                $v = 1;
                $add++;
            }
            $sum += $v + $add;
        };
        return $sum;
    }
}