<?php

/**
 * 442. Find All Duplicates in an Array
 * https://leetcode.com/problems/find-all-duplicates-in-an-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDuplicates($nums)
    {
        $map = $result = [];

        foreach ($nums as $num)
            if (isset($map[$num])) {
                $result[] = $num;
            } else {
                $map[$num] = 1;
            }

        return $result;
    }
}