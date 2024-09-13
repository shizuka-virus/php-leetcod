<?php

/**
 * 7. Reverse Integer
 * https://leetcode.com/problems/reverse-integer/
 */

class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $i = (int)(strrev($x)) * ($x < 0 ? -1 : 1);
        return $i < pow(2, 31) && $i >= pow(-2, 31) ? $i : 0;
    }
}