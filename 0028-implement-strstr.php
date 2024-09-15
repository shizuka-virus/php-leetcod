<?php

/**
 * 28. Implement strStr()
 * https://leetcode.com/problems/implement-strstr/
 */

class Solution
{
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        return $needle === '' ? 0 : (($p = strpos($haystack, $needle)) === false ? -1 : $p);
    }
}