<?php

/**
 * 2540. Minimum Common Value
 * https://leetcode.com/problems/minimum-common-value/
 */

 class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function getCommon($nums1, $nums2) {
        $hash = [];
        
        foreach ($nums1 as $num)
            $hash[$num] = true;
        
        foreach ($nums2 as $num)
            if (isset($hash[$num])) return $num;
        
        return -1;
    }
}