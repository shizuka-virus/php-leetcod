<?php

/**
 * 1539. Kth Missing Positive Number
 * https://leetcode.com/problems/kth-missing-positive-number/
 *
 * https://leetcode.com/problems/kth-missing-positive-number/discuss/1004549/C%2B%2B-PHP-JavaScript-Swift-Easy-short-and-faster-solution-without-counting
 */

class Solution
{
    /**
     * @param Integer[] $arr
     * @param Integer   $k
     * @return Integer
     */
    function findKthPositive($arr, $k)
    {
        $i = 0;
        while ($arr[$i] < $i + $k + 1 && $i < count($arr)) $i++;
        return $i + $k;
    }
}