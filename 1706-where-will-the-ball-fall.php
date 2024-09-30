<?php

/**
 * 1706. Where Will the Ball Fall
 * https://leetcode.com/problems/where-will-the-ball-fall/
 */

class Solution
{
    /**
     * @param Integer[][] $grid
     * @return Integer[]
     */
    function findBall($grid)
    {
        $r = count($grid);
        $c = count($grid[0]);
        $i = 0;
        $result = array_fill(0, $c, -1);
        while ($i < $c) {
            $jc = $i;
            $jr = 0;
            $res = 1;
            while ($jr < $r) {
                if (
                    ($grid[$jr][$jc] == 1 && ($jc == $c - 1 || $grid[$jr][$jc + 1] == -1)) ||
                    ($grid[$jr][$jc] == -1 && ($jc == 0 || $grid[$jr][$jc - 1] == 1))
                ) {
                    $res = -1;
                    $jr = $r + 1;
                }
                $jc += $grid[$jr][$jc];
                $jr++;
            }
            if ($res > 0) $result[$i] = $jc;
            $i++;
        }
        return $result;
    }
}