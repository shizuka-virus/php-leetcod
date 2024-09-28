<?php

/**
 * 1480. Running Sum of 1d Array
 * https://leetcode.com/problems/running-sum-of-1d-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums)
    {
        for ($i = 1; $i < count($nums); $i++) $nums[$i] += $nums[$i - 1];
        return $nums;
    }
}