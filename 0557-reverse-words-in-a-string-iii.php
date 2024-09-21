<?php

/**
 * 557. Reverse Words in a String III
 * https://leetcode.com/problems/reverse-words-in-a-string-iii/
 */

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        return implode(' ', array_map(function ($w) {
            return strrev($w);
        }, explode(' ', $s)));
    }
}