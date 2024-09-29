<?php

/**
 * 1641. Count Sorted Vowel Strings
 * https://leetcode.com/problems/count-sorted-vowel-strings/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function countVowelStrings($n)
    {
        $dp = array_fill(0, $n + 1, [1, 1, 1, 1, 1, 0]);
        for ($i = 1; $i <= $n; $i++)
            for ($j = 4; $j >= 0; $j--)
                $dp[$i][$j] = $dp[$i][$j + 1] + $dp[$i - 1][$j];
        return $dp[$n][0];
    }
}