<?php

/**
 * 15. 3Sum
 * https://leetcode.com/problems/3sum/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        if (count($nums) < 3) return [];

        $result = [];
        sort($nums);

        for ($i = 0; $i < count($nums) - 2; $i++)
            if ($i == 0 || $nums[$i] > $nums[$i - 1]) {
                $l = $i + 1;
                $r = count($nums) - 1;
                while ($l < $r) {
                    $sum = $nums[$i] + $nums[$l] + $nums[$r];
                    if ($sum > 0) {
                        $r--;
                    } elseif ($sum < 0) {
                        $l++;
                    } else {
                        $result[] = [$nums[$i], $nums[$l], $nums[$r]];
                        $l++;
                    }
                }
            }

        return array_unique($result, SORT_REGULAR);
    }
}