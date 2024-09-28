<?php

/**
 * 1461. Check If a String Contains All Binary Codes of Size K
 * https://leetcode.com/problems/check-if-a-string-contains-all-binary-codes-of-size-k/
 */

class Solution
{
    /**
     * @param String  $s
     * @param Integer $k
     * @return Boolean
     */
    function hasAllCodes($s, $k)
    {
        $map = [];

        for ($i = 0; $i < strlen($s) - $k + 1; $i++) {
            $map[substr($s, $i, $k)] = true;
        }

        return count($map) == pow(2, $k);
    }
}