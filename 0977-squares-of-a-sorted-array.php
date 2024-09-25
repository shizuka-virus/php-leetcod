<?php

/**
 * 977. Squares of a Sorted Array
 * https://leetcode.com/problems/squares-of-a-sorted-array/
 */

// Solution with array_map and sort
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {
        $nums = array_map(function ($v) {
            return $v * $v;
        }, $nums);
        sort($nums);
        return $nums;
    }
}

// Solution with two pointers
class Solution2
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {
        $l = -1;
        $r = $length = count($nums);

        $result = [];

        while ($l + 1 < $r) {
            $m = ceil(($l + $r) / 2);
            if ($nums[$m] >= 0) $r = $m; else $l = $m;
        }

        while ($l >= 0 || $r < $length) {
            if (isset($nums[$l])) {
                if (isset($nums[$r])) {
                    // l and r actual
                    if ($nums[$r] >= abs($nums[$l])) {
                        // add l
                        $result[] = $nums[$l] * $nums[$l];
                        $l--;
                    } else {
                        // add r
                        $result[] = $nums[$r] * $nums[$r];
                        $r++;
                    }
                } else {
                    // only l
                    $result[] = $nums[$l] * $nums[$l];
                    $l--;
                }
            } else {
                // only r
                $result[] = $nums[$r] * $nums[$r];
                $r++;
            }
        }

        return $result;
    }
}