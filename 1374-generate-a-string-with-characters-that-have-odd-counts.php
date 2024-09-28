<?php

/**
 * 1374. Generate a String With Characters That Have Odd Counts
 * https://leetcode.com/problems/generate-a-string-with-characters-that-have-odd-counts/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return String
     */
    function generateTheString($n)
    {
        return $n % 2 ? str_repeat("a", $n) : str_repeat("a", $n - 1) . "b";
    }
}