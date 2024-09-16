<?php

/**
 * 80. Remove Duplicates from Sorted Array II
 * https://leetcode.com/problems/remove-duplicates-from-sorted-array-ii/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        if (count($nums) > 2)
            for ($i = count($nums) - 1; $i > 1; $i--)
                if ($nums[$i] == $nums[$i - 1] && $nums[$i - 1] == $nums[$i - 2])
                    unset($nums[$i]);
        return count($nums);
    }
}