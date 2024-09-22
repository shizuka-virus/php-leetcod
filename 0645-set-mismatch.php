<?php

/**
 * 645. Set Mismatch
 * https://leetcode.com/problems/set-mismatch/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums)
    {
        $map = array_fill(1, count($nums), 0);

        foreach ($nums as $num) {
            $map[$num]++;
        }

        for ($i = 1; $i <= count($nums); $i++) {
            if ($map[$i] == 0) {
                $b = $i;
            } elseif ($map[$i] == 2) {
                $a = $i;
            }
        }

        return [$a, $b];
    }
}