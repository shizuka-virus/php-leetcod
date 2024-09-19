<?php

/**
 * 229. Majority Element II
 * https://leetcode.com/problems/majority-element-ii/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function majorityElement($nums) {
        sort($nums);
        $needed = floor(count($nums)/3) + 1;
        return array_unique(array_filter($nums, function($val, $key) use ($nums, $needed) {
            return isset($nums[$key+$needed-1]) && $nums[$key+$needed-1] == $val;
        }, ARRAY_FILTER_USE_BOTH));
    }
}