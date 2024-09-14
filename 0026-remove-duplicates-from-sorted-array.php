<?php

/**
 * 26. Remove Duplicates from Sorted Array
 * https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        if (count($nums) < 2) return count($nums);
        for ($i = count($nums) - 1; $i; $i--)
            if ($nums[$i] == $nums[$i - 1])
                unset($nums[$i]);
        return count($nums);
    }
}