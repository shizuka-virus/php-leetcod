<?php

/**
 * 190. Reverse Bits
 * https://leetcode.com/problems/reverse-bits/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n)
    {
        $bin = decbin($n);
        return bindec(strrev($bin) . str_repeat('0', 32 - strlen($bin)));
    }
}