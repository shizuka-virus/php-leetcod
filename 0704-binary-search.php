<?php

/**
 * 704. Binary Search
 * https://leetcode.com/problems/binary-search/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer
     */
    function search($nums, $target)
    {
        if (!count($nums) || $target < $nums[0] || $target > $nums[count($nums) - 1]) return -1;

        if ($target - $nums[0] < $nums[count($nums) - 1] - $target) {
            for ($i = 0; $i < count($nums) && $nums[$i] <= $target; $i++)
                if ($nums[$i] == $target) return $i;
        } else {
            for ($i = count($nums) - 1; $i >= 0 && $nums[$i] >= $target; $i--)
                if ($nums[$i] == $target) return $i;
        }

        return -1;
    }
}

class Solution2
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $l = 0;
        $r = count($nums) - 1;

        if ($target < $nums[$l] || $target > $nums[$r]) return -1;

        while ($l + 1 < $r) {
            $m = ceil(($l + $r) / 2);
            if ($nums[$m] == $target) {
                return $m;
            } elseif ($nums[$m] < $target) {
                $l = $m;
            } else {
                $r = $m;
            }
        }

        switch ($target) {
            case $nums[$l]:
                return $l;
            case $nums[$r]:
                return $r;
            default:
                return -1;
        }
    }
}