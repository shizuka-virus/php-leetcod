<?php

/**
 * 58. Length of Last Word
 * https://leetcode.com/problems/length-of-last-word/
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        return strlen(trim(substr($s, strripos(rtrim($s), ' '))));
    }
}