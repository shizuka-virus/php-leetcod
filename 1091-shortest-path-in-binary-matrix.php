<?php

/**
 * 1091. Shortest Path in Binary Matrix
 * https://leetcode.com/problems/shortest-path-in-binary-matrix/
 */

class Solution
{
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function shortestPathBinaryMatrix($grid)
    {
        $len = count($grid);
        if ($len === 1) return 1;
        if ($grid[0][0] === 1 || $grid[$len - 1][$len - 1] === 1) return -1;

        $directions = [[-1, -1], [-1, 0], [-1, 1], [0, -1], [0, 1], [1, -1], [1, 0], [1, 1]];
        $stack = [[0, 0]];
        $steps = 1;

        while (!empty($stack)) {
            $new = [];

            foreach ($stack as $pos) {
                if ($pos[0] < 0 || $pos[1] < 0 || $pos[0] >= $len || $pos[1] >= $len) continue;
                if ($grid[$pos[0]][$pos[1]] == 1) continue;
                if ($pos[0] == $len - 1 && $pos[1] == $len - 1) return $steps;

                foreach ($directions as $d) {
                    $new[] = [$pos[0] + $d[0], $pos[1] + $d[1]];
                }

                $grid[$pos[0]][$pos[1]] = 1;
            }

            $stack = $new;
            $steps++;
        }

        return -1;
    }
}