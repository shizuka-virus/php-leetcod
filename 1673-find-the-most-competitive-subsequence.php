<?php

/**
 * 1673. Find the Most Competitive Subsequence
 * https://leetcode.com/problems/find-the-most-competitive-subsequence/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Integer[]
     */
    function mostCompetitive($nums, $k)
    {
        $stack = [];
        $j = count($nums) - $k;
        foreach ($nums as $num) {
            while ($j > 0 && count($stack) > 0 && $num < $stack[count($stack) - 1]) {
                array_pop($stack);
                $j--;
            }
            $stack[] = $num;
        }
        return count($stack) > $k ? array_slice($stack, 0, $k) : $stack;
    }
}