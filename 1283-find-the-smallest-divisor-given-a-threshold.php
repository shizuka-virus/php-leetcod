<?php

/**
 * 1283. Find the Smallest Divisor Given a Threshold
 * https://leetcode.com/problems/find-the-smallest-divisor-given-a-threshold/
 *
 * https://leetcode.com/problems/find-the-smallest-divisor-given-a-threshold/discuss/926272/PHP-Simple-binary-search-solution
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $threshold
     * @return Integer
     */
    function smallestDivisor($nums, $threshold)
    {
        $left = 0;
        $right = max($nums) + 1;
        while ($right > $left + 1) {
            $middle = $left + floor(($right - $left) / 2);
            $sum = 0;
            for ($i = 0; $i < count($nums); $i++) $sum += ceil($nums[$i] / $middle);
            if ($sum <= $threshold) $right = $middle; else $left = $middle;
        }
        return $right;
    }
}