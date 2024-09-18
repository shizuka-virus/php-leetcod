<?php

/**
 * 136. Single Number
 * https://leetcode.com/problems/single-number/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        $map = [];
        foreach ($nums as $num)
            if (isset($map[$num])) {
                unset($map[$num]);
            } else {
                $map[$num] = 1;
            }
        return array_keys($map)[0];
    }
}

class Solution2
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        return array_reduce($nums, function ($a, $b) {
            return $a ^ $b;
        });
    }
}