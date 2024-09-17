<?php

/**
 * 91. Decode Ways
 * https://leetcode.com/problems/decode-ways/
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s)
    {
        if ($s == "") return 0;

        $dp = [1, $s[0] == '0' ? 0 : 1];

        for ($i = 2; $i <= strlen($s); $i++) {
            $dp[$i] = 0;
            if ($s[$i - 1] != '0')
                $dp[$i] += $dp[$i - 1] ?? 0;
            if ($s[$i - 2] == '1' || ($s[$i - 2] == '2' && $s[$i - 1] <= '6'))
                $dp[$i] += $dp[$i - 2] ?? 0;
        }

        return $dp[strlen($s)];
    }
}