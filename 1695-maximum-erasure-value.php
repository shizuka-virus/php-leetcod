<?php

/**
 * 1695. Maximum Erasure Value
 * https://leetcode.com/problems/maximum-erasure-value/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumUniqueSubarray($nums)
    {
        $max = 0;
        for ($i = 0, $from = 0, $sum = 0, $map = []; $i < count($nums); $i++) {
            if (!isset($map[$nums[$i]]) || $map[$nums[$i]] == 0) {
                // new
                $map[$nums[$i]] = true;
                $sum += $nums[$i];
            } else {
                // double!
                if ($sum > $max) $max = $sum;
                while ($nums[$from] != $nums[$i]) {
                    unset($map[$nums[$from]]);
                    $sum -= $nums[$from];
                    $from++;
                }
                $from++;
            }
        }
        if ($sum > $max) $max = $sum;
        return $max;
    }
}