<?php

/**
 * 376. Wiggle Subsequence
 * https://leetcode.com/problems/wiggle-subsequence/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function wiggleMaxLength($nums)
    {
        $ans = 1;
        $next = 0;
        $prev = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            if (($nums[$i] > $prev && $next >= 0) || ($nums[$i] < $prev && $next <= 0)) {
                $ans++;
                $next = $nums[$i] > $prev ? -1 : 1;
            }
            $prev = $nums[$i];
        }

        return $ans;
    }
}