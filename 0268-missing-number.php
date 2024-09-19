<?php

/**
 * 268. Missing Number
 * https://leetcode.com/problems/missing-number/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums)
    {
        $xor = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $xor ^= $i ^ $nums[$i];
        }
        return $xor ^ $i;
    }
}