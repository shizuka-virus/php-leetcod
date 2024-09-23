<?php

/**
 * 709. To Lower Case
 * https://leetcode.com/problems/to-lower-case/
 */

class Solution
{
    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str)
    {
        return implode('', array_map(function ($s) {
            return ord($s) >= 65 && ord($s) <= 90 ? chr(ord($s) + 32) : $s;
        }, str_split($str)));
    }
}