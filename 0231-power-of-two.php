<?php

/**
 * 231. Power of Two
 * https://leetcode.com/problems/power-of-two/
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n)
    {
        return substr_count(decbin($n), '1') == 1;
    }
}