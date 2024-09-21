<?php

/**
 * 556. Next Greater Element III
 * https://leetcode.com/problems/next-greater-element-iii/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function nextGreaterElement($n)
    {
        $n = (string)$n;
        $len = strlen($n);

        for ($i = $len - 1; $i; $i--)
            if ($n[$i] > $n[$i - 1]) {
                for ($j = $i; $j < $len && $n[$j] > $n[$i - 1]; $j++) {
                }
                [$n[$i - 1], $n[$j - 1]] = [$n[$j - 1], $n[$i - 1]];
                for (; $i < $len - 1; $i++)
                    for ($j = $i + 1; $j < $len; $j++)
                        if ($n[$j] < $n[$i]) [$n[$i], $n[$j]] = [$n[$j], $n[$i]];
                return $n < pow(2, 31) ? $n : -1;
            }

        return -1;
    }
}