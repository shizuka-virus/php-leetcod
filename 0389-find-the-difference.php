<?php

/**
 * 389. Find the Difference
 * https://leetcode.com/problems/find-the-difference/
 */

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t)
    {
        $s = str_split($s);
        $t = str_split($t);
        sort($s);
        sort($t);
        for ($i = 0; $i < count($t); $i++)
            if ($s[$i] != $t[$i]) return $t[$i];
        return '';
    }
}