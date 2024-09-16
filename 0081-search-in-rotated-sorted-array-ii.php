<?php

/**
 * 81. Search in Rotated Sorted Array II
 * https://leetcode.com/problems/search-in-rotated-sorted-array-ii/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Boolean
     */
    function search($nums, $target)
    {
        if (empty($nums)) return false;

        if ($target >= $nums[0]) {
            $i = -1;
            while (++$i < count($nums))
                if ($target <= $nums[$i])
                    return $target == $nums[$i];
        }

        if ($target <= $nums[count($nums) - 1]) {
            $i = count($nums);
            while (--$i >= 0)
                if ($target >= $nums[$i])
                    return $target == $nums[$i];
        }

        return false;
    }
}