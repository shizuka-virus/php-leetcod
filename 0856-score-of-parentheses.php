<?php

/**
 * 856. Score of Parentheses
 * https://leetcode.com/problems/score-of-parentheses/
 */

class Solution
{
    /**
     * @param String $S
     * @return Integer
     */
    function scoreOfParentheses($S)
    {
        if ($S == '()') return 1;

        for ($i = $k = 0; $i < strlen($S); $i++) {
            $k += $S[$i] == '(' ? 1 : -1;
            if ($k == 0 && $i < strlen($S) - 1) {
                return $this->scoreOfParentheses(substr($S, 0, $i + 1)) + $this->scoreOfParentheses(substr($S, $i + 1));
            }
        }

        return 2 * $this->scoreOfParentheses(substr($S, 1, -1));
    }
}