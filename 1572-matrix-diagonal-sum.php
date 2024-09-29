<?php

/**
 * 1572. Matrix Diagonal Sum
 * https://leetcode.com/problems/matrix-diagonal-sum/
 *
 * https://leetcode.com/problems/matrix-diagonal-sum/discuss/857581/php-easy-on-solution
 */

class Solution
{
    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function diagonalSum($mat)
    {
        for ($i = 0, $sum = 0, $max = count($mat) - 1; $i <= $max; $i++)
            $sum += $mat[$i][$i] + ($i != $max - $i ? $mat[$i][$max - $i] : 0);
        return $sum;
    }
}