<?php

/**
 * 12. Integer to Roman
 * https://leetcode.com/problems/integer-to-roman/
 */

class Solution
{
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num)
    {
        $s = str_pad($num, 4, '0', STR_PAD_LEFT);
        $a = [
            ["", "M", "MM", "MMM"], // 1xxx , 2xxx , 3xxx
            ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"], // 1xx , 2xx , ... , 9xx
            ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"], // 1x , 2x , ... 9x
            ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"]  // 1 , 2 , ... , 9
        ];
        return $a[0][$s[0]] . $a[1][$s[1]] . $a[2][$s[2]] . $a[3][$s[3]];
    }
}