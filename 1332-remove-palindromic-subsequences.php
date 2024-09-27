<?php

/**
 * 1332. Remove Palindromic Subsequences
 * https://leetcode.com/problems/remove-palindromic-subsequences/
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function removePalindromeSub($s)
    {
        return strlen($s) <= 1 ? strlen($s) : ($s === strrev($s) ? 1 : 2);
    }
}