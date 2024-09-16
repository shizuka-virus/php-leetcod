<?php

/**
 * 84. Largest Rectangle in Histogram
 * https://leetcode.com/problems/largest-rectangle-in-histogram/
 */

class Solution
{
    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function largestRectangleArea($heights)
    {
        $max = 0;
        $stack = [];
        $heights[] = 0;
        for ($i = 0; $i < count($heights); $i++) {
            while (count($stack) && $heights[$stack[count($stack) - 1]] > $heights[$i]) {
                $h = $heights[array_pop($stack)];
                $from = count($stack) ? $stack[count($stack) - 1] + 1 : 0;
                $max = max($max, $h * ($i - $from));
            }
            $stack[] = $i;
        }
        return $max;
    }
}