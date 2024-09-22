<?php

/**
 * 695. Max Area of Island
 * https://leetcode.com/problems/max-area-of-island/
 */

class Solution
{
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxAreaOfIsland($grid)
    {
        $max = 0;
        for ($i = 0; $i < count($grid); $i++)
            for ($j = 0; $j < count($grid[$i]); $j++)
                if ($grid[$i][$j] == 1) {
                    $now = 0;
                    $stack = [[$i, $j]];
                    while (!empty($stack)) {
                        [$ii, $jj] = array_pop($stack);
                        if (isset($grid[$ii][$jj]) && $grid[$ii][$jj] == 1) {
                            $grid[$ii][$jj] = 2;
                            $now++;
                            $stack[] = [$ii - 1, $jj];
                            $stack[] = [$ii + 1, $jj];
                            $stack[] = [$ii, $jj - 1];
                            $stack[] = [$ii, $jj + 1];
                        }
                    }
                    $max = max($now, $max);
                }
        return $max;
    }
}