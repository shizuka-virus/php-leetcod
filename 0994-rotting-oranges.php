<?php

/**
 * 994. Rotting Oranges
 * https://leetcode.com/problems/rotting-oranges/
 */

class Solution
{
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function orangesRotting($grid)
    {
        $min = 0;

        $fresh = array_reduce($grid, function ($carry, $row) {
            return $carry + array_reduce($row, function ($carry, $val) {
                    return $carry + ($val == 1 ? 1 : 0);
                });
        });

        do {
            $rotten = 0;
            $new = $grid;
            for ($i = 0; $i < count($new); $i++)
                for ($j = 0; $j < count($new[$i]); $j++) {
                    if ($new[$i][$j] == 1) {
                        $aroundRotted = max(
                                $grid[$i - 1][$j] ?? 0,
                                $grid[$i][$j - 1] ?? 0,
                                $grid[$i + 1][$j] ?? 0,
                                $grid[$i][$j + 1] ?? 0) == 2;
                        if ($aroundRotted) {
                            $rotten++;
                            $new[$i][$j] = 2;
                        }
                    }
                }
            if ($rotten) {
                $min++;
                $fresh -= $rotten;
                $grid = $new;
            }
        } while ($rotten);

        return $fresh ? -1 : $min;
    }
}