<?php

/**
 * 858. Mirror Reflection
 * https://leetcode.com/problems/mirror-reflection/
 *
 * https://leetcode.com/problems/mirror-reflection/discuss/939466/PHP-Easy-solution-with-explanations-and-pictures!
 */

class Solution
{
    /**
     * @param Integer $p
     * @param Integer $q
     * @return Integer
     */
    function mirrorReflection($p, $q)
    {
        $n = $m = 1;
        while ($q * $n != $p * $m) {
            $n++;
            if ($p * $m < $q * $n) $m++;
        }
        return $n % 2 ? $m % 2 : 2;
    }
}