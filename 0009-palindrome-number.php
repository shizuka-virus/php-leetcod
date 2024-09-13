<?php

/**
 * 9. Palindrome Number
 * https://leetcode.com/problems/palindrome-number/
 */

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        return $x == strrev($x);
    }
}