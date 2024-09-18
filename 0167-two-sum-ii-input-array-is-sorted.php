<?php

/**
 * 167. Two Sum II - Input Array Is Sorted
 * https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/
 */

class Solution
{
    /**
     * @param Integer[] $numbers
     * @param Integer   $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        $l = 0;
        $r = count($numbers) - 1;

        while ($target != $numbers[$l] + $numbers[$r])
            if ($target < $numbers[$l] + $numbers[$r]) $r--; else $l++;

        return [$l + 1, $r + 1];
    }
}