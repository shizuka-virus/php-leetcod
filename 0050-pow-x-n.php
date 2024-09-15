<?php

/**
 * 50. Pow(x, n)
 * https://leetcode.com/problems/powx-n/
 */

class Solution
{
    /**
     * @param Float   $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n)
    {
        if ($n > 0) return $n % 2 === 0 ? $this->myPow($x * $x, $n / 2) : $x * $this->myPow($x * $x, ($n - 1) / 2);
        if ($n < 0) return 1 / $this->myPow($x, abs($n));
        return 1;
    }
}