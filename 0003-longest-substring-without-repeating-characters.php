<?php

/**
 * 3. Longest Substring Without Repeating Characters
 * https://leetcode.com/problems/longest-substring-without-repeating-characters/
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $max = 0;
        $map = [];
        for ($r = $l = 0; $r < strlen($s);) {
            while (isset($map[$s[$r]])) unset($map[$s[$l++]]);
            $map[$s[$r++]] = true;
            $max = max($max, $r - $l);
        }
        return $max;
    }
}