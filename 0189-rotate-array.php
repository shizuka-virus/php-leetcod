<?php

/**
 * 189. Rotate Array
 * https://leetcode.com/problems/rotate-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {
        $k %= count($nums);
        $nums = array_merge($k ? array_slice($nums, -$k) : [], array_slice($nums, 0, count($nums) - $k));
    }
}