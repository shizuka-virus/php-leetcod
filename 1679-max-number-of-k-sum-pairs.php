<?php

/**
 * 1679. Max Number of K-Sum Pairs
 * https://leetcode.com/problems/max-number-of-k-sum-pairs/
 *
 * https://leetcode.com/problems/max-number-of-k-sum-pairs/discuss/961869/PHP-JavaScript-O(n)-solution-100-faster
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Integer
     */
    function maxOperations($nums, $k)
    {
        $map = [];
        $pairs = 0;
        foreach ($nums as $num)
            if (isset($map[$k - $num]) && $map[$k - $num]) {
                $map[$k - $num]--;
                $pairs++;
            } else {
                $map[$num] = ($map[$num] ?? 0) + 1;
            }
        return $pairs;
    }
}

class Solution2
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Integer
     */
    function maxOperations($nums, $k)
    {
        sort($nums);
        $pairs = 0;
        $l = 0;
        $r = count($nums) - 1;
        while ($l < $r) {
            if ($k - $nums[$l] > $nums[$r]) {
                $l++;
            } elseif ($k - $nums[$l] < $nums[$r]) {
                $r--;
            } else {
                $l++;
                $r--;
                $pairs++;
            }
        }
        return $pairs;
    }
}