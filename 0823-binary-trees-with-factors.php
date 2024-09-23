<?php

/**
 * 823. Binary Trees With Factors
 * https://leetcode.com/problems/binary-trees-with-factors/
 */

class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function numFactoredBinaryTrees($arr)
    {
        $dp = [];
        $res = 0;
        $mod = 10 ** 9 + 7;

        sort($arr);

        for ($i = 0; $i < count($arr); $i++) {
            $dp[$arr[$i]] = 1;
            for ($j = 0; $j < $i; $j++) {
                if ($arr[$i] % $arr[$j] == 0) {
                    $dp[$arr[$i]] = ($dp[$arr[$i]] + $dp[$arr[$j]] * $dp[$arr[$i] / $arr[$j]]) % $mod;
                }
            }
            $res = ($res + $dp[$arr[$i]]) % $mod;
        }

        return $res;
    }
}