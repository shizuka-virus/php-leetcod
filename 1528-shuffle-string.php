<?php

/**
 * 1528. Shuffle String
 * https://leetcode.com/problems/shuffle-string/
 */

class Solution
{
    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices)
    {
        $array = array_combine($indices, str_split($s));
        ksort($array);
        return implode('', $array);
    }
}