<?php

/**
 * 821. Shortest Distance to a Character
 * https://leetcode.com/problems/shortest-distance-to-a-character/
 */

class Solution
{
    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    function shortestToChar($s, $c)
    {
        $array = str_split($s);
        $count = count($array);
        $p1 = $p2 = strpos($s, $c);
        $res = [];

        for ($i = 0; $i < $count; $i++) {
            if ($p2 !== false) {
                if ($p2 < $i) while ($p2 < $count && $array[++$p2] != $c) {
                }
                if ($p2 >= $count) $p2 = false;
                if (abs($p2 - $i) < abs($i - $p1)) $p1 = $p2;
            }
            $res[] = abs($i - $p1);
        }

        return $res;
    }
}