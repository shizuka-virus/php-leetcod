<?php

/**
 * 46. Permutations
 * https://leetcode.com/problems/permutations/
 */

class Solution
{

    private $collection = [];

    function recursion($nums, $del = false, $now = [])
    {
        if ($del !== false) $now[] = array_splice($nums, $del, 1)[0];
        if (empty($nums)) $this->collection[] = $now;
        for ($i = 0; $i < count($nums); $i++) $this->recursion($nums, $i, $now);
    }

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums)
    {
        $this->recursion($nums);
        return $this->collection;
    }
}