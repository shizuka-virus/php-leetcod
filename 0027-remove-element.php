<?php

/**
 * 27. Remove Element
 * https://leetcode.com/problems/remove-element/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        for ($i = count($nums) - 1; $i >= 0; $i--)
            if ($nums[$i] == $val)
                unset($nums[$i]);
        return count($nums);
    }
}