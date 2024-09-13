<?php

/**
 * 6. ZigZag Conversion
 * https://leetcode.com/problems/zigzag-conversion/
 */

class Solution
{
    /**
     * @param String  $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows)
    {
        if ($numRows <= 1) return $s;

        $str = [];
        $cycle = $numRows * 2 - 2;

        for ($i = 1; $i <= strlen($s); $i++) {
            $j = $i % $cycle == 0 ? $cycle : $i % $cycle;
            if ($j > $numRows) $j = $numRows * 2 - $j;
            $str[$j] = ($str[$j] ?? '') . $s[$i - 1];
        }

        return implode('', $str);
    }
}