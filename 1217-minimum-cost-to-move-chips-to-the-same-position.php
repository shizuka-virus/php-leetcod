<?php

/**
 * 1217. Minimum Cost to Move Chips to The Same Position
 * https://leetcode.com/problems/minimum-cost-to-move-chips-to-the-same-position/
 *
 * https://leetcode.com/problems/minimum-cost-to-move-chips-to-the-same-position/discuss/924366/PHP-Easy-O(n)-solution
 */

class Solution
{
    /**
     * @param Integer[] $position
     * @return Integer
     */
    function minCostToMoveChips($position)
    {
        $counts = [0, 0];
        foreach ($position as $pos) $counts[$pos % 2]++;
        return min($counts);
    }
}