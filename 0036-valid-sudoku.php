<?php

/**
 * 36. Valid Sudoku
 * https://leetcode.com/problems/valid-sudoku/
 */

class Solution
{
    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board)
    {
        $map = [];
        for ($r = 0; $r < 9; $r++)
            for ($c = 0; $c < 9; $c++)
                if ($board[$r][$c] != '.') {
                    $rkey = 'r' . $r . '-' . $board[$r][$c];
                    $ckey = 'c' . $c . '-' . $board[$r][$c];
                    $skey = 's' . floor($r / 3) . floor($c / 3) . '-' . $board[$r][$c];
                    if (isset($map[$rkey]) || isset($map[$ckey]) || isset($map[$skey])) return false;
                    $map[$rkey] = $map[$ckey] = $map[$skey] = true;
                }
        return true;
    }
}