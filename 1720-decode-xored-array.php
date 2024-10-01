<?php

/**
 * 1720. Decode XORed Array
 * https://leetcode.com/problems/decode-xored-array/
 */

class Solution
{
    /**
     * @param Integer[] $encoded
     * @param Integer   $first
     * @return Integer[]
     */
    function decode($encoded, $first)
    {
        $decoded = [$first];
        foreach ($encoded as $v) {
            $first = $first ^ $v;
            $decoded[] = $first;
        }
        return $decoded;
    }
}