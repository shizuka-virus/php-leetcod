<?php

/**
 * 1678. Goal Parser Interpretation
 * https://leetcode.com/problems/goal-parser-interpretation/
 *
 * https://leetcode.com/problems/goal-parser-interpretation/discuss/961778/PHP-JavaScript-Swift-One-line-100-fast-with-explanation
 */

class Solution
{
    /**
     * @param String $command
     * @return String
     */
    function interpret($command)
    {
        return str_replace(['()', '(al)'], ['o', 'al'], $command);
    }
}