<?php

/**
 * 134. Gas Station
 * https://leetcode.com/problems/gas-station/
 */

class Solution
{
    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost)
    {
        $count = count($gas);
        if (array_sum($cost) > array_sum($gas)) return -1;

        for ($station = 0; $station < $count; $station++)
            if ($gas[$station] >= $cost[$station]) {
                $tank = 0;
                for ($i = $station; $i < $station + $count; $i++) {
                    $j = $i >= $count ? $i - $count : $i;
                    $tank += $gas[$j] - $cost[$j];
                    if ($tank < 0) continue 2;
                }
                if ($tank >= 0) return $station;
            }
        return -1;
    }
}