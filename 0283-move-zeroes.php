<?php

/**
 * 283. Move Zeroes
 * https://leetcode.com/problems/move-zeroes/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums)
    {
        usort($nums, function ($a, $b) {
            return $a && $b ? 0 : ($b ? 1 : -1);
        });
    }
}