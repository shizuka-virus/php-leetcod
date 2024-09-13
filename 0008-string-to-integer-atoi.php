<?php

/**
 * 8. String to Integer (atoi)
 * https://leetcode.com/problems/string-to-integer-atoi/
 */

class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        if(!preg_match('/^([\-\+]?[0-9]+)/', trim($str), $match)) return 0;
        $int = (int)$match[1];
        if($int >= pow(2, 31)) return pow(2, 31) - 1;
        if($int < pow(-2, 31)) return pow(-2, 31);
        return $int;
    }
}