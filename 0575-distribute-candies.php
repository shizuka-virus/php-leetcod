<?php

/**
 * 575. Distribute Candies
 * https://leetcode.com/problems/distribute-candies/
 */

class Solution
{
    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType)
    {
        return min(count(array_flip($candyType)), count($candyType) / 2);
    }
}