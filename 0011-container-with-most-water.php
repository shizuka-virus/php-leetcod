<?php

/**
 * 11. Container With Most Water
 * https://leetcode.com/problems/container-with-most-water/
 */

class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $maxWater = $left = 0;
        $right = count($height) - 1;

        while ($left < $right) {
            $maxWater = max($maxWater, min($height[$left], $height[$right]) * ($right - $left));
            if ($height[$left] > $height[$right]) $right--; else $left++;
        }

        return $maxWater;
    }
}