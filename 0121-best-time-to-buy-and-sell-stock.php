<?php

/**
 * 121. Best Time to Buy and Sell Stock
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock/
 */

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        // array of ranges [min, max]
        $ranges = [[$prices[0], $prices[0]]];
        // minimal value
        $min = $minMax = $prices[0];

        foreach ($prices as $price) {
            if ($price < $min) {
                $ranges[] = [$price, $price];
                $min = $minMax = $price;
            } elseif ($price > $minMax) {
                $ranges = array_map(function ($range) use ($price) {
                    return [$range[0], $range[1] < $price ? $price : $range[1]];
                }, $ranges);
                $minMax = $price;
            }
        }

        return max(array_map(function ($range) {
            return $range[1] - $range[0];
        }, $ranges));
    }
}