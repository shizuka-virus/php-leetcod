<?php

/**
 * 1260. Shift 2D Grid
 * https://leetcode.com/problems/shift-2d-grid/
 */

class Solution
{
    /**
     * @param Integer[][] $grid
     * @param Integer     $k
     * @return Integer[][]
     */
    function shiftGrid($grid, $k)
    {
        $rowCount = count($grid[0]);

        $numbers = [];
        foreach ($grid as $row)
            foreach ($row as $num)
                $numbers[] = $num;

        $k %= count($numbers);
        if (!$k) return $grid;

        $numbers = array_merge(array_slice($numbers, -$k), array_slice($numbers, 0, -$k));

        $result = [];
        $i = 0;
        while ($i < count($numbers)) {
            $row = [];
            for ($j = 0; $j < $rowCount; $j++)
                $row[] = $numbers[$i + $j];
            $result[] = $row;
            $i += $rowCount;
        }

        return $result;
    }
}