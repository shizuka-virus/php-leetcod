<?php

/**
 * 120. Triangle
 * https://leetcode.com/problems/triangle/
 */

class Solution
{
    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    function minimumTotal($triangle)
    {
        for ($row = 1; $row < count($triangle); $row++) {
            for ($i = 0; $i < count($triangle[$row]); $i++) {
                $triangle[$row][$i] += min(
                    $triangle[$row - 1][$i] ?? $triangle[$row - 1][$i - 1],
                    $triangle[$row - 1][$i - 1] ?? $triangle[$row - 1][$i]);
            }
        }

        return min(array_pop($triangle));
    }
}