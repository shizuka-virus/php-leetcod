<?php

/**
 * 869. Reordered Power of 2
 * https://leetcode.com/problems/reordered-power-of-2/
 */

class Solution
{
    /**
     * @param Integer $N
     * @return Boolean
     */
    function reorderedPowerOf2($N)
    {
        $A = str_split($N);
        sort($A);
        $str = implode('', $A);

        $i = 1;
        while ($i <= 10 ** 9 && strlen($i) <= strlen($str)) {
            $arr = str_split($i);
            sort($arr);
            if ($str === implode('', $arr)) return true;
            $i *= 2;
        }

        return false;
    }
}