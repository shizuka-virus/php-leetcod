<?php

/**
 * 65. Valid Number
 * https://leetcode.com/problems/valid-number/
 */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isNumber($s)
    {
        return preg_match('/^(|\-|\+)(\d+|\d*\.\d+|\d+\.\d*)(|e(|\-|\+)\d+)$/', trim($s));
    }
}