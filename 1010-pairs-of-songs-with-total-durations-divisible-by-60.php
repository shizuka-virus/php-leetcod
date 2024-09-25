<?php

/**
 * 1010. Pairs of Songs With Total Durations Divisible by 60
 * https://leetcode.com/problems/pairs-of-songs-with-total-durations-divisible-by-60/
 */

class Solution
{
    /**
     * @param Integer[] $time
     * @return Integer
     */
    function numPairsDivisibleBy60($time)
    {
        $map = [];
        $pairs = 0;

        foreach ($time as $t)
            $map[$t % 60] = ($map[$t % 60] ?? 0) + 1;

        for ($i = 1; $i < 30; $i++)
            if (isset($map[$i]) && isset($map[60 - $i]))
                $pairs += $map[$i] * $map[60 - $i];

        if (isset($map[0])) $pairs += $map[0] * ($map[0] - 1) / 2;
        if (isset($map[30])) $pairs += $map[30] * ($map[30] - 1) / 2;

        return $pairs;
    }
}