<?php

/**
 * 239. Sliding Window Maximum
 * https://leetcode.com/problems/sliding-window-maximum/
 *
 * TODO: Time Limit Exceeded
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function maxSlidingWindow($nums, $k)
    {
        if ($k == 1) return $nums;
        if ($k == count($nums)) return [max($nums)];

        $window = [$nums[0]];
        $result = [];

        $i = 0;
        $prev = $nums[0];
        $max = max(array_slice($nums, 0, $k));

        while ($i < $k - 1) $window[] = $nums[$i++];

        while ($i < count($nums)) {
            $prev = array_shift($window);
            $window[] = $nums[$i];
            $max = $nums[$i] > $max ? $nums[$i] : ($prev < $max ? $max : max($window));
            $result[] = $max;
            $i++;
        }

        return $result;
    }
}