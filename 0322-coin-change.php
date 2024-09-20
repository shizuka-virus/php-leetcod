<?php

/**
 * 322. Coin Change
 * https://leetcode.com/problems/coin-change/
 */

class Solution
{
    /**
     * @param Integer[] $coins
     * @param Integer   $amount
     * @return Integer
     */
    function coinChange($coins, $amount)
    {
        $dp = array_fill(0, $amount + 1, -1);
        $dp[0] = 0;

        for ($i = 1; $i <= $amount; $i++)
            foreach ($coins as $coin)
                if ($i - $coin >= 0 && $dp[$i - $coin] != -1)
                    $dp[$i] = $dp[$i] > 0 ? min($dp[$i], $dp[$i - $coin] + 1) : $dp[$i - $coin] + 1;

        return $dp[$amount];
    }
}