<?php

/**
 * 1663. Smallest String With A Given Numeric Value
 * https://leetcode.com/problems/smallest-string-with-a-given-numeric-value/
 */

class Solution
{
    /**
     * @param Integer $n
     * @param Integer $k
     * @return String
     */
    function getSmallestString($n, $k)
    {
        $k -= $n;
        $mid = ceil($k / 25);
        return str_repeat("a", $n - $mid) . chr(97 + $k - ($mid - 1) * 25) . str_repeat("z", $mid - 1);
    }
}