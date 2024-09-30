<?php

/**
 * 1680. Concatenation of Consecutive Binary Numbers
 * https://leetcode.com/problems/concatenation-of-consecutive-binary-numbers/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function concatenatedBinary($n)
    {
        $ans = 0;
        $m = 1;
        $c = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i === $m) {
                $m <<= 1;
                $c++;
            }
            $ans = ($ans << $c) + $i;
            if ($ans > 1e9 + 7) $ans = $ans % (1e9 + 7);
        }
        return $ans;
    }
}