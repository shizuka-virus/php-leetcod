<?php

/**
 * 881. Boats to Save People
 * https://leetcode.com/problems/boats-to-save-people/
 */

class Solution
{
    /**
     * @param Integer[] $people
     * @param Integer   $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit)
    {
        sort($people);
        $ans = $l = 0;
        $r = count($people) - 1;
        while ($l <= $r) {
            $r--;
            $ans++;
            if ($l <= $r && $people[$l] <= $limit - $people[$r + 1]) $l++;
        }
        return $ans;
    }
}