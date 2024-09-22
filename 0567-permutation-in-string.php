<?php

/**
 * 567. Permutation in String
 * https://leetcode.com/problems/permutation-in-string/
 */

class Solution
{
    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2)
    {
        $map = [];

        for ($i = 0; $i < strlen($s1); $i++) {
            $map[$s1[$i]] = 1 + $map[$s1[$i]] ?? 0;
            $map[$s2[$i]] = -1 + $map[$s2[$i]] ?? 0;
            if ($map[$s1[$i]] == 0) unset($map[$s1[$i]]);
            if ($map[$s2[$i]] == 0) unset($map[$s2[$i]]);
        }

        $i = strlen($s1);
        $j = 0;
        while (!empty($map) && $i < strlen($s2)) {
            $map[$s2[$i]] = -1 + $map[$s2[$i]] ?? 0;
            $map[$s2[$j]] = 1 + $map[$s2[$j]] ?? 0;
            if ($map[$s2[$i]] == 0) unset($map[$s2[$i]]);
            if ($map[$s2[$j]] == 0) unset($map[$s2[$j]]);
            $i++;
            $j++;
        }

        return empty($map);
    }
}