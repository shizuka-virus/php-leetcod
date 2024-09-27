<?php

/**
 * 1323. Maximum 69 Number
 * https://leetcode.com/problems/maximum-69-number/
 */

class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number($num)
    {
        return preg_replace('/6/', '9', $num, 1);
    }
}