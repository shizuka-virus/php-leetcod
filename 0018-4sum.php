<?php

/**
 * 18. 4Sum
 * https://leetcode.com/problems/4sum/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer[][]
     */
    function fourSum($nums, $target)
    {
        $result = [];

        sort($nums);
        $len = count($nums);

        for ($i = 0; $i < $len - 3; $i++)
            if ($i == 0 || $nums[$i] != $nums[$i - 1])
                for ($j = $i + 1; $j < $len - 2; $j++)
                    if ($j == $i + 1 || $nums[$j] != $nums[$j - 1]) {
                        $presum = $nums[$i] + $nums[$j];
                        $l = $j + 1;
                        $r = $len - 1;
                        while ($l < $r) {
                            $sum = $presum + $nums[$l] + $nums[$r];
                            if ($sum > $target) {
                                $r--;
                            } elseif ($sum < $target) {
                                $l++;
                            } else {
                                $result[] = [$nums[$i], $nums[$j], $nums[$l], $nums[$r]];
                                $l++;
                            }
                        }
                    }

        return array_unique($result, SORT_REGULAR);
    }
}