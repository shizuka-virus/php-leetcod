<?php

/**
 * 1446. Consecutive Characters
 * https://leetcode.com/problems/consecutive-characters/
 *
 * https://leetcode.com/problems/consecutive-characters/discuss/921774/PHP-Two-easy-O(n)-solutions
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function maxPower($s)
    {
        $max = 0;
        for ($i = 0, $now = 0; $i < strlen($s); $i++) {
            $now = $s[$i] == ($s[$i - 1] ?? '') ? $now + 1 : 1;
            if ($now > $max) $max = $now;
        }
        return $max;
    }

    /**
     * @param String $s
     * @return Integer
     */
    function maxPower2($s)
    {
        $max = 0;
        for ($i = 0, $from = 0; $i < strlen($s); $i++) {
            if ($s[$i] != ($s[$i - 1] ?? '')) $from = $i;
            if ($i - $from + 1 > $max) $max = $i - $from + 1;
        }
        return $max;
    }
}