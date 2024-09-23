<?php

/**
 * 714. Best Time to Buy and Sell Stock with Transaction Fee
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock-with-transaction-fee/
 */

class Solution
{
    /**
     * @param Integer[] $prices
     * @param Integer   $fee
     * @return Integer
     */
    function maxProfit($prices, $fee)
    {
        if (count($prices) <= 1) return 0;

        $hold = -$prices[0];
        $notHold = 0;

        foreach ($prices as $price) {
            $hold = max($hold, $notHold - $price);
            $notHold = max($notHold, $hold + $price - $fee);
        }

        return $notHold;
    }
}