<?php

/**
 * 289. Game of Life
 * https://leetcode.com/problems/game-of-life/
 */

class Solution
{
    /**
     * @param Integer[][] $board
     * @return NULL
     */
    function gameOfLife(&$board)
    {
        $result = [];
        foreach ($board as $r => $row)
            foreach ($row as $c => $value) {
                $sum = 0;
                for ($i = $r - 1; $i <= $r + 1; $i++)
                    for ($j = $c - 1; $j <= $c + 1; $j++)
                        if ($i != $r || $j != $c)
                            $sum += $board[$i][$j] ?? 0;
                $result[$r][$c] = $sum == 3 || $value && $sum == 2 ? 1 : 0;
            }
        $board = $result;
    }
}