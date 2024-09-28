<?php

/**
 * 1437. Check If All 1's Are at Least Length K Places Away
 * https://leetcode.com/problems/check-if-all-1s-are-at-least-length-k-places-away/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Boolean
     */
    function kLengthApart($nums, $k)
    {
        for ($i = 0, $pos = -$k - 1; $i < count($nums); $i++)
            if ($nums[$i]) {
                if ($i - $pos <= $k) return false;
                $pos = $i;
            }
        return true;
    }
}