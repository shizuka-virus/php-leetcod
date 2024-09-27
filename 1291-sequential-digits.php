<?php

/**
 * 1291. Sequential Digits
 * https://leetcode.com/problems/sequential-digits/
 */

class Solution
{
    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer[]
     */
    function sequentialDigits($low, $high)
    {
        $s = '123456789';

        $minDigits = strlen($low);
        $maxDigits = strlen($high);

        $nums = [];

        for ($digits = $minDigits; $digits <= $maxDigits; $digits++) {
            for ($start = 0; ($start + $digits) <= 9; $start++) {
                $num = (int)substr($s, $start, $digits);
                if ($num < $low) continue;
                if ($num > $high) return $nums;
                $nums[] = $num;
            }
        }

        return $nums;
    }
}