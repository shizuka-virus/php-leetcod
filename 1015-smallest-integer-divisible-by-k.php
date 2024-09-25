<?php

/**
 * 1015. Smallest Integer Divisible by K
 * https://leetcode.com/problems/smallest-integer-divisible-by-k/
 */

class Solution
{
    /**
     * @param Integer $K
     * @return Integer
     */
    function smallestRepunitDivByK($K)
    {
        if ($K % 2 == 0 || $K % 5 == 0) return -1;

        $i = 1;
        $N = 1;
        $mods = [];

        while (true) {
            if ($N >= $K)
                if ($N % $K == 0) {
                    return $i;
                } elseif (isset($mod[$N % $K])) {
                    return -1;
                } else {
                    $mods[$N % $K] = true;
                }
            $N = ($N % $K) * 10 + 1;
            $i++;
        }
    }
}