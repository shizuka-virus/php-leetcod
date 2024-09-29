<?php

/**
 * 1624. Largest Substring Between Two Equal Characters
 * https://leetcode.com/problems/largest-substring-between-two-equal-characters/
 *
 * https://leetcode.com/problems/largest-substring-between-two-equal-characters/discuss/902667/php-one-pass-solution-on-0ms-faster-than-10000
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function maxLengthBetweenEqualCharacters($s)
    {
        $map = [];
        $max = -1;

        foreach (str_split($s) as $i => $ch)
            if (!isset($map[$ch])) {
                $map[$ch] = $i;
            } elseif ($i - $map[$ch] - 1 > $max) {
                $max = $i - $map[$ch] - 1;
            }

        return $max;
    }
}