<?php

/**
 * 849. Maximize Distance to Closest Person
 * https://leetcode.com/problems/maximize-distance-to-closest-person/
 */

class Solution
{
    /**
     * @param Integer[] $seats
     * @return Integer
     */
    function maxDistToClosest($seats)
    {
        $max = 0;
        $index = -1;
        for ($i = 0; $i < count($seats); $i++) {
            if ($seats[$i] == 1 || !isset($seats[$i + 1])) {
                if ($index == -1) {
                    // first
                    $max = $index = $i;
                } elseif ($i == count($seats) - 1 && $seats[$i] == 0) {
                    // last
                    if ($i - $index > $max) $max = $i - $index;
                } else {
                    // center
                    if (floor(($i - $index) / 2) > $max) $max = floor(($i - $index) / 2);
                }
                $index = $i;
            }
        }
        return $max;
    }
}