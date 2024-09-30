<?php

/**
 * 1688. Count of Matches in Tournament
 * https://leetcode.com/problems/count-of-matches-in-tournament/
 *
 * https://leetcode.com/problems/count-of-matches-in-tournament/discuss/970401/PHP-Swift-Easy-solution
 */

class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOfMatches($n)
    {
        $result = 0;
        while ($n > 1) {
            $result += floor($n / 2);
            $n = ceil($n / 2);
        }
        return $result;
    }
}
