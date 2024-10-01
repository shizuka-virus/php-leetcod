<?php

/**
 * 2425. Bitwise XOR of All Pairings
 * https://leetcode.com/problems/bitwise-xor-of-all-pairings/
 */

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function xorAllNums($nums1, $nums2) {
        $value = 0;
        
        if (count($nums2) % 2) foreach ($nums1 as $num) $value ^= $num;
        if (count($nums1) % 2) foreach ($nums2 as $num) $value ^= $num;
        
        return $value;
    }
}