<?php

/**
 * 242. Valid Anagram
 * https://leetcode.com/problems/valid-anagram/
 */

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        if (strlen($s) !== strlen($t)) return false;

        $map = [];

        for ($i = 0; $i < strlen($s); $i++)
            $map[$s[$i]] = 1 + $map[$s[$i]] ?? 0;

        for ($i = 0; $i < strlen($t); $i++)
            if (!$map[$t[$i]]) {
                return false;
            } else {
                $map[$t[$i]]--;
            }

        return true;
    }
}