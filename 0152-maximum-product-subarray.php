<?php

/**
 * 152. Maximum Product Subarray
 * https://leetcode.com/problems/maximum-product-subarray/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums)
    {
        $res = max($nums);
        $count = count($nums);
        $buf = $nums[0];
        for ($i = 1; $i < $count - 1; $i++) {
            $buf = $buf ? $buf * $nums[$i] : $nums[$i];
            if ($buf > $res) $res = $buf;
        }
        $buf = $nums[$count - 1];
        for ($i = $count - 2; $i >= 0; $i--) {
            $buf = $buf ? $buf * $nums[$i] : $nums[$i];
            if ($buf > $res) $res = $buf;
        }
        return $res;
    }
}