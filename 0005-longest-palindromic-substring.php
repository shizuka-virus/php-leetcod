<?php

/**
 * 5. Longest Palindromic Substring
 * https://leetcode.com/problems/longest-palindromic-substring/
 */

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        $anspos = 0;
        $anslen = 1;
        $len = strlen($s);

        for ($i = 0; 2 * ($len - $i) - 1 > $anslen; $i++) {
            // check aba, aabaa, ...
            for ($j = ceil($anslen / 2); $i - $j >= 0 && $i + $j + 1 <= $len; $j++) {
                $str = substr($s, $i - $j, $j * 2 + 1);
                if ($str != strrev($str)) break;
                if ($j * 2 + 1 > $anslen) {
                    $anspos = $i - $j;
                    $anslen = $j * 2 + 1;
                }
            }
            // check abba, aabbaa, ...
            for ($j = ceil(($anslen - 1) / 2); $i - $j >= 0 && $i + $j + 2 <= $len; $j++) {
                $str = substr($s, $i - $j, $j * 2 + 2);
                if ($str != strrev($str)) break;
                if ($j * 2 + 2 > $anslen) {
                    $anspos = $i - $j;
                    $anslen = $j * 2 + 2;
                }
            }
        }

        return substr($s, $anspos, $anslen);
    }
}