<?php

/**
 * 198. House Robber
 * https://leetcode.com/problems/house-robber/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums)
    {
        $sums = [];
        for ($i = 0; $i < count($nums); $i++) {
            $sums[] = max($nums[$i] + $sums[$i - 2] ?? 0, $sums[$i - 1] ?? 0);
        }
        return $sums[count($sums) - 1] ?? 0;
    }
}