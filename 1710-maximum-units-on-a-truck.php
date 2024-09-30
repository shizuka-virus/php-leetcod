<?php

/**
 * 1710. Maximum Units on a Truck
 * https://leetcode.com/problems/maximum-units-on-a-truck/
 */

class Solution
{
    /**
     * @param Integer[][] $boxTypes
     * @param Integer     $truckSize
     * @return Integer
     */
    function maximumUnits($boxTypes, $truckSize)
    {
        $result = 0;
        usort($boxTypes, function ($a, $b) {
            return $a[1] - $b[1];
        });

        while (($box = array_pop($boxTypes)) && $truckSize > 0) {
            $result += $box[1] * min($box[0], $truckSize);
            $truckSize -= $box[0];
        }

        return $result;
    }
}