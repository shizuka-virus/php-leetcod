<?php

/**
 * 1463. Cherry Pickup II
 * https://leetcode.com/problems/cherry-pickup-ii/
 */

class Solution
{

    private $grid = [];
    private $rows = 0;
    private $cols = 0;
    private $map = [];

    function recursion($row, $p1, $p2)
    {
        if ($row >= $this->rows) return 0;

        $v1 = $p1 === $p2 ? 0 : $this->grid[$row][$p1];
        $v2 = $p1 === $p2 ? 0 : $this->grid[$row][$p2];

        if (isset($this->map[$row][$p1][$p2])) {
            return $v1 + $v2 + $this->map[$row][$p1][$p2];
        }

        for ($i = $p1 - 1; $i <= $p1 + 1; $i++)
            for ($j = $p2 - 1; $j <= $p2 + 1; $j++)
                if ($i >= 0 && $j >= 0 && $i < $this->cols && $j < $this->cols)
                    $max = max($max ?? 0, $this->recursion($row + 1, $i, $j));

        $this->map[$row][$p1][$p2] = $max;

        return $v1 + $v2 + $max;
    }

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function cherryPickup($grid)
    {
        $this->grid = $grid;
        $this->rows = count($grid);
        $this->cols = count($grid[0] ?? []);

        return $this->recursion(0, 0, $this->cols - 1);
    }
}