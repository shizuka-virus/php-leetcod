<?php

/**
 * 1486. XOR Operation in an Array
 * https://leetcode.com/problems/xor-operation-in-an-array/
 */

class Solution
{
    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start)
    {
        $xor = 0;
        for ($i = 0; $i < $n; $i++)
            $xor ^= $start + 2 * $i;
        return $xor;
    }
}