<?php

/**
 * 45. Jump Game II
 * https://leetcode.com/problems/jump-game-ii/
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums)
    {
        $now = 0;
        $jumps = 1;
        $nextJump = $maxJump = $nums[0];

        while ($maxJump < count($nums) - 1) {
            while ($now <= $maxJump) {
                $nextJump = max($nextJump, $now + $nums[$now]);
                $now++;
            }
            $jumps++;
            $maxJump = $nextJump;
        }

        return count($nums) <= 1 ? 0 : $jumps;
    }
}