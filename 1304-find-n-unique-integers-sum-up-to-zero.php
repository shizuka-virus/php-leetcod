<?php

/**
 * 1304. Find N Unique Integers Sum up to Zero
 * https://leetcode.com/problems/find-n-unique-integers-sum-up-to-zero/
 */

class Solution
{

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function sumZero($n)
    {
        $ans = [];
        $k = 1;
        while ($n >= 2) {
            $ans[] = $k;
            $ans[] = -$k;
            $k++;
            $n -= 2;
        }
        if ($n) $ans[] = 0;
        return $ans;
    }
}