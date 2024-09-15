<?php

/**
 * 34. Find First and Last Position of Element in Sorted Array
 * https://leetcode.com/problems/find-first-and-last-position-of-element-in-sorted-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer[]
     */
    function searchRange($nums, $target)
    {
        $i = 0;
        while ($i < count($nums) && $nums[$i] <= $target) {
            if ($nums[$i] === $target) {
                $first = $first ?? $i;
                $last = $i;
            }
            $i++;
        }
        return [$first ?? -1, $last ?? -1];
    }
}