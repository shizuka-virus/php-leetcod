<?php

/**
 * 344. Reverse String
 * https://leetcode.com/problems/reverse-string/
 */

class Solution
{
    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $l = 0;
        $r = count($s) - 1;
        while ($l < $r) {
            [$s[$l], $s[$r]] = [$s[$r], $s[$l]];
            $l++;
            $r--;
        }
    }
}