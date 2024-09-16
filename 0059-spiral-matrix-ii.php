<?php

/**
 * 59. Spiral Matrix II
 * https://leetcode.com/problems/spiral-matrix-ii/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer[][]
     */
    function generateMatrix($n)
    {
        $matrix = array_fill(0, $n, array_fill(0, $n, 0));
        $y = $dy = 0;
        $x = -1;
        $dx = 1;
        for ($i = 1; $i <= $n * $n; $i++) {
            if (!isset($matrix[$y + $dy][$x + $dx]) || $matrix[$y + $dy][$x + $dx]) {
                [$dx, $dy] = [$dx == 0 ? -$dy : 0, $dx];
            }
            $x += $dx;
            $y += $dy;
            $matrix[$y][$x] = $i;
        }
        return $matrix;
    }
}