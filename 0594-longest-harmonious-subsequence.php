<?php

/**
 * 594. Longest Harmonious Subsequence
 * https://leetcode.com/problems/longest-harmonious-subsequence/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLHS($nums)
    {
        $map = [];
        $ans = 0;
        foreach ($nums as $num)
            $map[$num] = 1 + $map[$num] ?? 0;
        foreach ($map as $k => $v)
            if (isset($map[$k + 1]))
                $ans = max($ans, $map[$k] + $map[$k + 1]);
        return $ans;
    }
}