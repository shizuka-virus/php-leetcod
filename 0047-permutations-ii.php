<?php

/**
 * 47. Permutations II
 * https://leetcode.com/problems/permutations-ii/
 */

class Solution
{

    private $collection = [];

    function recursion($nums, $del = false, $now = [])
    {
        if ($del !== false) $now[] = array_splice($nums, $del, 1)[0];
        if (empty($nums)) $this->collection[implode(';', $now)] = true;
        for ($i = 0; $i < count($nums); $i++) $this->recursion($nums, $i, $now);
    }

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permuteUnique($nums)
    {
        sort($nums);
        $this->recursion($nums);
        return array_map(function ($v) {
            return explode(';', $v);
        }, array_keys($this->collection));
    }
}