<?php

/**
 * 910. Smallest Range II
 * https://leetcode.com/problems/smallest-range-ii/
 */

class Solution
{
    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer
     */
    function smallestRangeII($A, $K)
    {
        sort($A);
        for ($i = 0; $i < count($A); $i++) {
            $buf = [$A[0], $A[$i], $A[$i + 1] - 2 * $K, $A[count($A) - 1] - 2 * $K];
            $now = max($buf) - min($buf);
            $res = min($res ?? $now, $now);
        }
        return min($res, $A[count($A) - 1] - $A[0]);
    }
}