<?php

/**
 * 48. Rotate Image
 * https://leetcode.com/problems/rotate-image/
 */

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix)
    {
        $len = count($matrix);
        for ($i = 0; $i <= floor($len / 2) - 1; $i++)
            for ($j = 0; $j <= ceil($len / 2) - 1; $j++) {
                $buf = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$len - $j - 1][$i];
                $matrix[$len - $j - 1][$i] = $matrix[$len - $i - 1][$len - $j - 1];
                $matrix[$len - $i - 1][$len - $j - 1] = $matrix[$j][$len - $i - 1];
                $matrix[$j][$len - $i - 1] = $buf;
            }
        return $matrix;
    }
}