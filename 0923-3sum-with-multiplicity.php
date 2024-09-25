<?php

/**
 * 923. 3Sum With Multiplicity
 * https://leetcode.com/problems/3sum-with-multiplicity/
 */

class Solution
{
    /**
     * @param Integer[] $arr
     * @param Integer   $target
     * @return Integer
     */
    function threeSumMulti($arr, $target)
    {
        $ans = 0;
        $map = [];

        for ($i = 0; $i < count($arr) - 1; $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                if (isset($map[$target - $arr[$i] - $arr[$j]])) {
                    $ans += $map[$target - $arr[$i] - $arr[$j]];
                }
            }
            $map[$arr[$i]] = 1 + $map[$arr[$i]] ?? 0;
            $ans %= 10 ** 9 + 7;
        }

        return $ans % (10 ** 9 + 7);
    }
}