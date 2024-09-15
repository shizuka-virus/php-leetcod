<?php

/**
 * 42. Trapping Rain Water
 * https://leetcode.com/problems/trapping-rain-water/
 */

class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height)
    {
        $h = array_merge([0], $height, [0]);
        $ans = 0;
        $l = 0;
        $r = count($h) - 1;
        $lmax = $rmax = 0;
        while ($l < $r - 1) {
            if ($lmax <= $rmax) {
                // go left
                $l++;
                $lmax = max($lmax, $h[$l]);
                $ans += $lmax - $h[$l];
            } else {
                // go right
                $r--;
                $rmax = max($rmax, $h[$r]);
                $ans += $rmax - $h[$r];
            }
        }

        return $ans;
    }
}