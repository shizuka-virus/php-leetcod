<?php

/**
 * 980. Unique Paths III
 * https://leetcode.com/problems/unique-paths-iii/
 */

class Solution
{
    private $walksCount = 0;

    function go($grid, $x, $y)
    {
        switch ($grid[$x][$y]) {
            case 0:
            case 1:
                $grid[$x][$y] = -2;
                foreach ([[0, 1], [1, 0], [0, -1], [-1, 0]] as $way)
                    if (isset($grid[$x + $way[0]][$y + $way[1]]) && $grid[$x + $way[0]][$y + $way[1]] >= 0)
                        $this->go($grid, $x + $way[0], $y + $way[1]);
                break;
            case 2:
                $grid[$x][$y] = -2;
                foreach ($grid as $rows) foreach ($rows as $vals) if ($vals >= 0) return;
                $this->walksCount++;
                break;
        }
    }

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function uniquePathsIII($grid)
    {
        for ($x = 0; $x < count($grid); $x++)
            for ($y = 0; $y < count($grid[$x]); $y++)
                if ($grid[$x][$y] == 1) {
                    // start position
                    $this->go($grid, $x, $y);
                    return $this->walksCount;
                }
    }
}