<?php

/**
 * 1007. Minimum Domino Rotations For Equal Row
 * https://leetcode.com/problems/minimum-domino-rotations-for-equal-row/
 */

class Solution
{
    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @return Integer
     */
    function minDominoRotations($A, $B)
    {
        $dominoes = count($A);
        $results = [];

        foreach (array_unique([$A[0], $B[0]]) as $val) {
            $need = [0, 0];
            for ($i = 0; $i < $dominoes; $i++) {
                if ($A[$i] != $val) $need[0]++;
                if ($B[$i] != $val) $need[1]++;
                if ($A[$i] != $val && $B[$i] != $val) {
                    $need = false;
                    break;
                }
            }
            if ($need !== false) {
                $results[] = min($need);
            }
        }
        if (!count($results)) return -1;
        return min($results);
    }
}