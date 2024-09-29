<?php

/**
 * 1672. Richest Customer Wealth
 * https://leetcode.com/problems/richest-customer-wealth/
 */

class Solution
{
    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts)
    {
        return max(array_map(function ($a) {return array_sum($a);}, $accounts));
    }
}