<?php

/**
 * 125. Valid Palindrome
 * https://leetcode.com/problems/valid-palindrome/
 */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $s1 = preg_replace('/[^a-zA-Z0-9]/', '', $s);
        $s1 = strtolower($s1);
        return $s1 === strrev($s1);
    }
}