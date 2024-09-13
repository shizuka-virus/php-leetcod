<?php

/**
 * 10. Regular Expression Matching
 * https://leetcode.com/problems/regular-expression-matching/
 */

class Solution
{
    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p)
    {
        return preg_match('/^' . $p . '$/', $s);
    }
}