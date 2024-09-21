<?php

/**
 * 454. 4Sum II
 * https://leetcode.com/problems/4sum-ii/
 */

class Solution
{
    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @param Integer[] $C
     * @param Integer[] $D
     * @return Integer
     */
    function fourSumCount($A, $B, $C, $D)
    {
        $map = [];
        $count = 0;
        foreach ($A as $v1)
            foreach ($B as $v2)
                $map[$v1 + $v2] = ($map[$v1 + $v2] ?? 0) + 1;
        foreach ($C as $v3)
            foreach ($D as $v4)
                $count += $map[0 - $v3 - $v4] ?? 0;
        return $count;
    }
}