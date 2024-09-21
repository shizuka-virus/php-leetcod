<?php

/**
 * 458. Poor Pigs
 * https://leetcode.com/problems/poor-pigs/
 */

class Solution
{

    /**
     * @param Integer $buckets
     * @param Integer $minutesToDie
     * @param Integer $minutesToTest
     * @return Integer
     */
    function poorPigs($buckets, $minutesToDie, $minutesToTest)
    {
        return ceil(log($buckets, floor($minutesToTest / $minutesToDie) + 1));
    }
}