<?php

/**
 * 1309. Decrypt String from Alphabet to Integer Mapping
 * https://leetcode.com/problems/decrypt-string-from-alphabet-to-integer-mapping/
 */

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function freqAlphabets($s)
    {
        for ($i = 26; $i; $i--)
            $s = str_replace($i > 9 ? $i . '#' : $i, chr(96 + $i), $s);
        return $s;
    }
}