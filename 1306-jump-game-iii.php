<?php

/**
 * 1306. Jump Game III
 * https://leetcode.com/problems/jump-game-iii/
 */

class Solution
{
    /**
     * @param Integer[] $arr
     * @param Integer $start
     * @param Boolean[] $mapIndexes
     * @return Boolean
     */
    function canReach($arr, $start, $mapIndexes = [])
    {
        if (!isset($arr[$start]) || isset($mapIndexes[$start])) return false;
        if ($arr[$start] == 0) return true;

        $mapIndexes[$start] = true;
        if ($this->canReach($arr, $start + $arr[$start], $mapIndexes)) return true;
        if ($this->canReach($arr, $start - $arr[$start], $mapIndexes)) return true;

        return false;
    }
}