<?php

/**
 * 20. Valid Parentheses
 * https://leetcode.com/problems/valid-parentheses/
 */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++)
            switch ($s[$i]) {
                case '(':
                case '{':
                case '[':
                    $stack[] = $s[$i];
                    break;
                case ')':
                    if (array_pop($stack) !== '(') return false;
                    break;
                case '}':
                    if (array_pop($stack) !== '{') return false;
                    break;
                case ']':
                    if (array_pop($stack) !== '[') return false;
                    break;
                default:
                    return false;
            }

        return empty($stack);
    }
}