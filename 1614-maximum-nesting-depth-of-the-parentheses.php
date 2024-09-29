<?php

/**
 * 1614. Maximum Nesting Depth of the Parentheses
 * https://leetcode.com/problems/maximum-nesting-depth-of-the-parentheses/
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function maxDepth($s)
    {
        $max = $now = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $now += $s[$i] == "(" ? 1 : ($s[$i] == ")" ? -1 : 0);
            $max = max($max, $now);
        }
        return $max;
    }
}