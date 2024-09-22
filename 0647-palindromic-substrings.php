<?php

/**
 * 647. Palindromic Substrings
 * https://leetcode.com/problems/palindromic-substrings/
 */

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function countSubstrings($s)
    {
        // add all a, b, c, ...
        $ans = strlen($s);

        // check aba, abcba, ...
        for ($i = 1; $i < strlen($s) - 1; $i++) {
            $left = $i - 1;
            $right = $i + 1;
            while ($left >= 0 && $right < strlen($s) && $s[$left] === $s[$right]) {
                $ans++;
                $left--;
                $right++;
            }
        }

        // check abba, abccba, ...
        for ($i = 0; $i < strlen($s) - 1; $i++) {
            $left = $i;
            $right = $i + 1;
            while ($left >= 0 && $right < strlen($s) && $s[$left] === $s[$right]) {
                $ans++;
                $left--;
                $right++;
            }
        }

        return $ans;
    }
}