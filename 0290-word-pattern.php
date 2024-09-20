<?php

/**
 * 290. Word Pattern
 * https://leetcode.com/problems/word-pattern/
 */

class Solution
{
    /**
     * @param String $pattern
     * @param String $str
     * @return Boolean
     */
    function wordPattern($pattern, $str)
    {
        $match = [];
        $strs = explode(' ', $str);

        if (count($strs) != strlen($pattern)) return false;

        foreach ($strs as $i => $word) {
            $char = $pattern[$i];
            if (!isset($match[$char])) {
                $match[$char] = $word;
            } else {
                if ($match[$char] != $word) return false;
            }
            if (count(array_keys($match, $word)) >= 2) {
                return false;
            }
        }
        return true;
    }
}