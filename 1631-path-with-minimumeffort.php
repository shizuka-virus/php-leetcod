<?php

/**
 * 1631. Path With Minimum Effort
 * https://leetcode.com/problems/path-with-minimum-effort/
 */

class Solution
{
    /**
     * @param Integer[][] $heights
     * @return Integer
     */
    function minimumEffortPath($heights)
    {
        $rows = count($heights);
        $cols = count($heights[0]);

        if ($rows == 1 && $cols == 1) return 0;

        $map = array_fill(0, $rows, array_fill(0, $cols, false));
        $d = [[0, 1], [1, 0], [0, -1], [-1, 0]];

        $effort = 0;
        $map[0][0] = true;
        $stack = [[0, 0, 0, 3, -1]];
        while (count($stack)) {
            $newStack = [];
            $mineff = false;
            foreach ($stack as $cell) {
                if ($cell[4] > $effort) {
                    $newStack[] = $cell;
                    if ($mineff === false || $cell[4] < $mineff) $mineff = $cell[4];
                } else {
                    $add = false;
                    $cell2 = 3;
                    $cell3 = 0;
                    $cell4 = -1;
                    for ($i = $cell[2]; $i <= $cell[3]; $i++) {
                        if (
                            isset($map[$cell[0] + $d[$i][0]][$cell[1] + $d[$i][1]]) &&
                            $map[$cell[0] + $d[$i][0]][$cell[1] + $d[$i][1]] === false
                        ) {
                            $r = $cell[0] + $d[$i][0];
                            $c = $cell[1] + $d[$i][1];
                            $eff = abs($heights[$r][$c] - $heights[$cell[0]][$cell[1]]);
                            if ($eff <= $effort) {
                                // new sector!
                                $map[$r][$c] = true;
                                $newStack[] = [$r, $c, 0, 3, -1];
                                $change = true;
                                if ($r == $rows - 1 && $c == $cols - 1) return $effort;
                            } else {
                                $add = true;
                                if ($i < $cell2) $cell2 = $i;
                                if ($i > $cell3) $cell3 = $i;
                                if ($mineff === false || $eff < $mineff) $mineff = $eff;
                                if ($cell4 == -1 || $eff < $cell4) $cell4 = $eff;
                            }
                        }
                    }
                    if ($add) $newStack[] = [$cell[0], $cell[1], $cell2, $cell3, $cell4];
                }
            }
            if (!$change) $effort = $mineff; else $change = false;
            $stack = $newStack;
        }

        return $effort;
    }
}