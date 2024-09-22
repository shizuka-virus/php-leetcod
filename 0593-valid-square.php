<?php

/**
 * 593. Valid Square
 * https://leetcode.com/problems/valid-square/
 *
 * https://leetcode.com/problems/valid-square/discuss/931803/PHP-Easy-solution-faster-than-100
 */

class Solution
{

    /**
     * @param Integer[] $p1
     * @param Integer[] $p2
     * @param Integer[] $p3
     * @param Integer[] $p4
     * @return Boolean
     */
    function validSquare($p1, $p2, $p3, $p4)
    {
        $points = [$p1, $p2, $p3, $p4];
        $len = [];

        for ($i = 0; $i < count($points) - 1; $i++)
            for ($j = $i + 1; $j < count($points); $j++)
                $len[] = sqrt(pow($points[$i][0] - $points[$j][0], 2) + pow($points[$i][1] - $points[$j][1], 2));

        return count(array_unique($len)) == 2 && array_search(0, $len) === false;
    }
}