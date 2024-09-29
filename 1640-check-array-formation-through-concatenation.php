<?php

/**
 * 1640. Check Array Formation Through Concatenation
 * https://leetcode.com/problems/check-array-formation-through-concatenation/
 */

class Solution
{
    /**
     * @param Integer[]   $arr
     * @param Integer[][] $pieces
     * @return Boolean
     */
    function canFormArray($arr, $pieces)
    {
        usort($pieces, function ($a, $b) {
            return count($b) - count($a);
        });

        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($pieces); $j++)
                if ($pieces[$j] !== false) {
                    for ($k = 0; $k < count($pieces[$j]); $k++)
                        if (!isset($arr[$i + $k]) || $pieces[$j][$k] != $arr[$i + $k]) continue 2;
                    $i += count($pieces[$j]) - 1;
                    $pieces[$j] = false;
                    continue 2;
                }
            return false;
        }
        return true;
    }
}