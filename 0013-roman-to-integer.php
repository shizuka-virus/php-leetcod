<?php

/**
 * 13. Roman to Integer
 * https://leetcode.com/problems/roman-to-integer/
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $sum = 0;
        $prices = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        $prices2x = ['IV' => 4, 'IX' => 9, 'XL' => 40, 'XC' => 90, 'CD' => 400, 'CM' => 900];
        $i = 0;
        $len = strlen($s);
        while ($i < $len) {
            while ($i < $len - 1 && isset($prices2x[$s[$i] . $s[$i + 1]])) {
                $sum += $prices2x[$s[$i++] . $s[$i++]];
            }
            if ($i < $len) {
                $sum += $prices[$s[$i++]];
            }
        }
        return $sum;
    }
}