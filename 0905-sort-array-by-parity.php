<?php

/**
 * 905. Sort Array By Parity
 * https://leetcode.com/problems/sort-array-by-parity/
 */

class Solution
{
    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A)
    {
        usort($A, function ($a, $b) {
            return $a % 2;
        });
        return $A;
    }
}