<?php

/**
 * 1502. Can Make Arithmetic Progression From Sequence
 * https://leetcode.com/problems/can-make-arithmetic-progression-from-sequence/
 */

class Solution
{
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr)
    {
        sort($arr);
        $d = $arr[1] - $arr[0];
        for ($i = 1; $i < count($arr); $i++)
            if ($arr[$i] - $arr[$i - 1] !== $d)
                return false;
        return true;
    }
}