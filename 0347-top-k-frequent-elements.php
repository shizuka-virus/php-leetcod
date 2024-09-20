<?php

/**
 * 347. Top K Frequent Elements
 * https://leetcode.com/problems/top-k-frequent-elements/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $map = $result = [];
        foreach ($nums as $num) $map[$num] = 1 + $map[$num] ?? 0;
        arsort($map);
        foreach ($map as $num => $val) {
            $result[] = $num;
            if (!--$k) break;
        }
        return $result;
    }
}