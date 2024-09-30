<?php

/**
 * 1689. Partitioning Into Minimum Number Of Deci-Binary Numbers
 * https://leetcode.com/problems/partitioning-into-minimum-number-of-deci-binary-numbers/
 *
 * https://leetcode.com/problems/partitioning-into-minimum-number-of-deci-binary-numbers/discuss/970417/PHP-JavaScript-One-line-solution
 */

class Solution
{
    /**
     * @param String $n
     * @return Integer
     */
    function minPartitions($n)
    {
        return max(str_split($n));
    }
}