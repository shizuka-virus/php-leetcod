<?php

/**
 * 35. Search Insert Position
 * https://leetcode.com/problems/search-insert-position/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        for ($i = count($nums); $i; $i--)
            if ($target > $nums[$i - 1])
                return $i;
        return 0;
    }
}


class Solution2
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $l = 0;
        $r = count($nums) - 1;

        if ($target <= $nums[$l]) return 0;
        if ($target > $nums[$r]) return $r + 1;

        while ($l + 1 < $r) {
            $m = ceil(($l + $r) / 2);
            if ($target > $nums[$m]) $l = $m;
            if ($target <= $nums[$m]) $r = $m;
        }

        return $r;
    }
}