<?php

/**
 * 1704. Determine if String Halves Are Alike
 * https://leetcode.com/problems/determine-if-string-halves-are-alike/
 */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s)
    {
        $a = substr($s, 0, strlen($s) / 2);
        $b = substr($s, strlen($s) / 2);
        $ch = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $aa = array_sum(array_map(function ($v) use ($a) {
            return substr_count($a, $v);
        }, $ch));
        $bb = array_sum(array_map(function ($v) use ($b) {
            return substr_count($b, $v);
        }, $ch));
        return $aa == $bb;
    }
}