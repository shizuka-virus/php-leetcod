<?php

/**
 * 22. Generate Parentheses
 * https://leetcode.com/problems/generate-parentheses/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n)
    {
        if ($n <= 1) return $n == 1 ? ['()'] : [''];

        $result = [];
        for ($i = 0; $i <= $n - 1; $i++) $map[$i] = $this->generateParenthesis($i);

        for ($i = 0; $i <= $n - 1; $i++)
            foreach ($map[$i] as $one)
                foreach ($map[$n - 1 - $i] as $two)
                    $result[] = "(" . $two . ")" . $one;

        return $result;
    }
}