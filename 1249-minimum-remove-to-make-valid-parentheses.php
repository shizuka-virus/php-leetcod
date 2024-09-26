<?php

/**
 * 1249. Minimum Remove to Make Valid Parentheses
 * https://leetcode.com/problems/minimum-remove-to-make-valid-parentheses/
 */

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function minRemoveToMakeValid($s)
    {
        $arr = str_split($s);

        for ($i = $j = 0; $i < count($arr); $i++)
            switch ($arr[$i]) {
                case '(':
                    $j++;
                    break;
                case ')':
                    if (!$j) $arr[$i] = ''; else $j--;
                    break;
            }

        if ($j)
            for ($i = count($arr) - 1, $j = 0; $i >= 0; $i--)
                switch ($arr[$i]) {
                    case ')':
                        $j++;
                        break;
                    case '(':
                        if (!$j) $arr[$i] = ''; else $j--;
                        break;
                }

        return implode('', $arr);
    }
}