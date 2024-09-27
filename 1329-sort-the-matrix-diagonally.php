<?php

/**
 * 1329. Sort the Matrix Diagonally
 * https://leetcode.com/problems/sort-the-matrix-diagonally/
 */

class Solution
{
    /**
     * @param Integer[][] $mat
     * @return Integer[][]
     */
    function diagonalSort($mat)
    {
        $rmax = count($mat) - 1;
        $cmax = count($mat[0]) - 1;

        if ($rmax == 0 || $cmax == 0) return $mat;

        for ($c = 0, $r = $rmax - 1, [$dr, $dc] = [-1, 0]; $c < $cmax; $r += $dr, $c += $dc) {
            if ($r == $c) [$dr, $dc] = [0, 1];
            $max = min($rmax - $r, $cmax - $c);

            for ($i = 0; $i < $max; $i++)
                for ($j = $i + 1; $j <= $max; $j++)
                    if ($mat[$r + $i][$c + $i] > $mat[$r + $j][$c + $j])
                        [$mat[$r + $i][$c + $i], $mat[$r + $j][$c + $j]] = [$mat[$r + $j][$c + $j], $mat[$r + $i][$c + $i]];
        }

        return $mat;
    }
}