<?php

/**
 * 215. Kth Largest Element in an Array
 * https://leetcode.com/problems/kth-largest-element-in-an-array/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Integer
     */
    function findKthLargest($nums, $k)
    {
        $buffer = array_fill(0, $k, min($nums));
        foreach ($nums as $num)
            if ($num > $buffer[$k - 1]) {
                $i = 0;
                while ($num <= $buffer[$i]) $i++;
                $j = $k - 2;
                while ($j >= $i) $buffer[$j + 1] = $buffer[$j--];
                $buffer[$i] = $num;
            }
        return array_pop($buffer);
    }
}