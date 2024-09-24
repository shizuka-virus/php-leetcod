<?php

/**
 * 845. Longest Mountain in Array
 * https://leetcode.com/problems/longest-mountain-in-array/
 */

class Solution
{
    /**
     * @param Integer[] $A
     * @return Integer
     */
    function longestMountain($A)
    {
        if (count($A) < 3) return 0;

        $from = $max = 0;

        for ($i = 1; $i < count($A); $i++) {
            if ($A[$i] == $A[$i - 1] || ($A[$i] < $A[$i - 1] && $from == $i - 1)) {
                $from = $i;
            }
            if ($A[$i] < $A[$i - 1] && $A[$i] <= ($A[$i + 1] ?? $A[$i]) && $from < $i - 1) {
                $max = $i - $from + 1 > $max ? $i - $from + 1 : $max;
                $from = $i;
            }
        }
        return $max;
    }
}