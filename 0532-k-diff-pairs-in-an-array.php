<?php

/**
 * 532. K-diff Pairs in an Array
 * https://leetcode.com/problems/k-diff-pairs-in-an-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findPairs($nums, $k)
    {
        $pairs = 0;
        $map = [];

        for ($i = 0; $i < count($nums); $i++) $map[$nums[$i]] = ($map[$nums[$i]] ?? 0) + 1;
        foreach ($map as $i => $count) if ($k ? isset($map[$i + $k]) : $count > 1) $pairs++;

        return $pairs;
    }
}