<?php

/**
 * 605. Can Place Flowers
 * https://leetcode.com/problems/can-place-flowers/
 */

class Solution
{
    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n)
    {
        $i = 0;
        while ($i < count($flowerbed) && $n) {
            if (!$flowerbed[$i] && !($flowerbed[$i - 1] ?? 0) && !($flowerbed[$i + 1] ?? 0)) {
                $n--;
                $i++;
            }
            $i++;
        }
        return $n <= 0;
    }
}