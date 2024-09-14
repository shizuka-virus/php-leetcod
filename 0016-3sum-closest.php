<?php

/**
 * 16. 3Sum Closest
 * https://leetcode.com/problems/3sum-closest/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer
     */
    function threeSumClosest($nums, $target)
    {
        $ans = $nums[0] + $nums[1] + $nums[2];
        $diff = abs($target - $ans);
        $len = count($nums);
        sort($nums);
        for ($i = 0; $i < $len - 2; $i++) {
            $l = $i + 1;
            $r = $len - 1;
            if ($i == 0 || $nums[$i] > $nums[$i - 1])
                while ($l < $r) {
                    if (abs($target - ($nums[$i] + $nums[$l] + $nums[$r])) < $diff) {
                        $ans = $nums[$i] + $nums[$l] + $nums[$r];
                        $diff = abs($target - ($nums[$i] + $nums[$l] + $nums[$r]));
                        if ($diff == 0) return $ans;
                    }
                    if (($nums[$i] + $nums[$l] + $nums[$r]) > $target) $r--; else $l++;
                }
        }
        return $ans;
    }
}