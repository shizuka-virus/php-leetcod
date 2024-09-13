<?php

/**
 * 4. Median of Two Sorted Arrays
 * https://leetcode.com/problems/median-of-two-sorted-arrays/
 */

class Solution
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $array = array_merge($nums1, $nums2);
        sort($array);
        $count = count($array);
        if ($count % 2 == 1) {
            return $array[($count - 1) / 2];
        } else {
            return ($array[$count / 2 - 1] + $array[$count / 2]) / 2;
        }
    }
}