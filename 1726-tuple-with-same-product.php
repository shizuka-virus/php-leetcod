<?php

/**
 * 1726. Tuple with Same Product
 * https://leetcode.com/problems/tuple-with-same-product/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function tupleSameProduct($nums)
    {
        $ans = 0;
        sort($nums);

        $map = [];
        for ($a = 0; $a < count($nums) - 1; $a++)
            for ($b = $a + 1; $b < count($nums); $b++) {
                $key = $nums[$a] * $nums[$b];
                if (isset($map[$key])) $map[$key][] = [$a, $b]; else $map[$key] = [[$a, $b]];
            }

        $map = array_filter($map, function ($a) {
            return count($a) > 1;
        });

        foreach ($map as $m)
            $ans += count($m) * (count($m) - 1) / 2;

        return $ans * 8;
    }
}