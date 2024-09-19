<?php

/**
 * 218. The Skyline Problem
 * https://leetcode.com/problems/the-skyline-problem/
 *
 * TODO: Time Limit Exceeded
 */

class Solution
{
    /**
     * @param Integer[][] $buildings
     * @return Integer[][]
     */
    function getSkyline($buildings)
    {
        $points = $active = [];
        $hPrev = $hNew = $x = $i = 0;

        while ($i < count($buildings)) {
            // get new building
            $x = $buildings[$i][0];

            while (isset($buildings[$i]) && $buildings[$i][0] == $x) {
                $hNew = max($buildings[$i][2], $hPrev, $hNew);
                $active[] = [$buildings[$i][1], $buildings[$i][2]];
                $i++;
            }

            usort($active, function ($a, $b) {
                return $b[0] > $a[0] ? 1 : 0;
            });

            while (!empty($active) && $x == $active[count($active) - 1][0]) {
                if (array_pop($active)[1] >= $hPrev) $hNew = -1;
            }

            if ($hNew == -1)
                $hNew = array_reduce($active, function ($res, $v) {
                    return $res > $v[1] ? $res : $v[1];
                }, 0);

            if ($hNew != $hPrev) {
                $points[] = [$x, $hNew];
                $hPrev = $hNew;
            }

            while (
                !empty($active) &&
                (!isset($buildings[$i]) || $active[count($active) - 1][0] < $buildings[$i][0])
            ) {
                $x = $active[count($active) - 1][0];

                while (!empty($active) && $x == $active[count($active) - 1][0]) {
                    if (array_pop($active)[1] >= $hNew) $hNew = -1;
                }
                if ($hNew == -1)
                    $hNew = array_reduce($active, function ($res, $v) {
                        return $res > $v[1] ? $res : $v[1];
                    }, 0);

                if ($hNew != $hPrev) {
                    $points[] = [$x, $hNew];
                    $hPrev = $hNew;
                }

            }

        }

        return $points;
    }
}