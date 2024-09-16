<?php

/**
 * 74. Search a 2D Matrix
 * https://leetcode.com/problems/search-a-2d-matrix/
 */

class Solution
{
    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target)
    {
        if (count($matrix))
            for ($i = 0; $i < count($matrix); $i++)
                if (count($matrix[$i]))
                    if ($target >= $matrix[$i][0] && $target <= $matrix[$i][count($matrix[$i]) - 1]) {
                        $j = 0;
                        while ($matrix[$i][$j] <= $target) {
                            if ($matrix[$i][$j] == $target) return true;
                            $j++;
                        }
                        return false;
                    }
        return false;
    }
}