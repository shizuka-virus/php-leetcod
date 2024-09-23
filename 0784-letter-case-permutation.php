<?php

/**
 * 784. Letter Case Permutation
 * https://leetcode.com/problems/letter-case-permutation/
 */

class Solution
{
    /**
     * @param String $s
     * @return String[]
     */
    function letterCasePermutation($s)
    {
        $s = strtolower($s);
        $stack = [$s];

        for ($i = 0; $i < strlen($s); $i++)
            if (ord($s[$i]) >= 97 && ord($s[$i]) <= 122) {
                // ord a...z = 97...122
                $stack = array_merge($stack, array_map(function ($s) use ($i) {
                    $s[$i] = strtoupper($s[$i]);
                    return $s;
                }, $stack));
            }

        return $stack;
    }
}