<?php

/**
 * 31. Next Permutation
 * https://leetcode.com/problems/next-permutation/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(&$nums)
    {
        $i = count($nums) - 2;
        while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) $i--;

        if ($i < 0) {
            sort($nums);
            return null;
        }

        $j = $i + 1;
        for ($k = $i + 1; $k < count($nums) && $nums[$j] - $nums[$i] > 1; $k++)
            if ($nums[$k] > $nums[$i] && $nums[$k] < $nums[$j])
                $j = $k;

        [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];

        for ($j = $i + 1; $j < count($nums) - 1; $j++)
            for ($k = $j + 1; $k < count($nums); $k++)
                if ($nums[$j] > $nums[$k]) [$nums[$j], $nums[$k]] = [$nums[$k], $nums[$j]];

        return null;
    }
}