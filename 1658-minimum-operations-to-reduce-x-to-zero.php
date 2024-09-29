<?php

/**
 * 1658. Minimum Operations to Reduce X to Zero
 * https://leetcode.com/problems/minimum-operations-to-reduce-x-to-zero/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $x
     * @return Integer
     */
    function minOperations($nums, $x)
    {
        $sum = 0;
        $len = count($nums);
        $ans = $len + 1;
        $l = -1;
        $r = $len;

        while ($sum < $x && $l < $len - 1) $sum += $nums[++$l];

        if ($sum < $x) return -1;
        if ($sum == $x) $ans = min($ans, $l + 1);

        while ($l >= 0) {
            $sum -= $nums[$l--];
            while ($sum < $x && $r > $l + 1) $sum += $nums[--$r];
            if ($sum == $x) $ans = min($ans, $l + 1 + $len - $r);
        }

        return $ans < $len + 1 ? $ans : -1;
    }
}