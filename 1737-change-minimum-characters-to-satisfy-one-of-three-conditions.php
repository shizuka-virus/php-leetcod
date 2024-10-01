<?php

/**
 * 1737. Change Minimum Characters to Satisfy One of Three Conditions
 * https://leetcode.com/problems/change-minimum-characters-to-satisfy-one-of-three-conditions/
 */

class Solution
{
    /**
     * @param String $a
     * @param String $b
     * @return Integer
     */
    function minCharacters($a, $b)
    {
        $ans = strlen($a) + strlen($b);

        $mapA = $mapB = array_fill(1, 26, 0);
        foreach (str_split($a) as $ch) $mapA[ord($ch) - 96]++;
        foreach (str_split($b) as $ch) $mapB[ord($ch) - 96]++;

        for ($aa = 0, $bb = 0, $i = 1; $i <= 25; $i++) {
            $aa += $mapA[$i];
            $bb += $mapB[$i];
            $ans = min($ans, strlen($a) - $aa + $bb, strlen($b) - $bb + $aa);
        }

        for ($i = 1; $i <= 26; $i++) {
            $ans = min($ans, strlen($a) + strlen($b) - $mapA[$i] - $mapB[$i]);
        }

        return $ans;
    }
}