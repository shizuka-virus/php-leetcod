<?php

/**
 * 682. Baseball Game
 * https://leetcode.com/problems/baseball-game/
 */

class Solution
{
    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops)
    {
        $scores = [];

        foreach ($ops as $command)
            switch ($command) {
                case 'C':
                    array_pop($scores);
                    break;
                case 'D':
                    $scores[] = $scores[count($scores) - 1] * 2;
                    break;
                case '+':
                    $scores[] = $scores[count($scores) - 1] + $scores[count($scores) - 2];
                    break;
                default:
                    $scores[] = $command;
                    break;
            }

        return array_sum($scores);
    }
}