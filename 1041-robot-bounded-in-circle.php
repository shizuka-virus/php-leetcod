<?php

/**
 * 1041. Robot Bounded In Circle
 * https://leetcode.com/problems/robot-bounded-in-circle/
 */

class Solution
{
    /**
     * @param String $instructions
     * @return Boolean
     */
    function isRobotBounded($instructions)
    {
        // x, y, dx, dy
        $x = $y = $dx = 0;
        $dy = 1;

        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < strlen($instructions); $j++)
                switch ($instructions[$j]) {
                    case 'L':
                        list($dx, $dy) = [-$dy, $dx];
                        break;
                    case 'R':
                        list($dx, $dy) = [$dy, -$dx];
                        break;
                    case 'G':
                        $x += $dx;
                        $y += $dy;
                        break;
                }
            if ($x == 0 && $y == 0 && $dx == 0 && $dy == 1) return true;
        }
        return false;
    }
}