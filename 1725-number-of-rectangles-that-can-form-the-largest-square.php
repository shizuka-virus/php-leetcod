<?php

/**
 * 1725. Number Of Rectangles That Can Form The Largest Square
 * https://leetcode.com/problems/number-of-rectangles-that-can-form-the-largest-square/
 */

class Solution
{
    /**
     * @param Integer[][] $rectangles
     * @return Integer
     */
    function countGoodRectangles($rectangles)
    {
        $arr = array_map(function ($a) {
            return min($a);
        }, $rectangles);
        $max = max($arr);
        return count(array_filter($arr, function ($a) use ($max) {
            return $a === $max;
        }));
    }
}