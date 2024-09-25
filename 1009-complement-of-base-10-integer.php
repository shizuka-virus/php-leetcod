<?php

/**
 * 1009. Complement of Base 10 Integer
 * https://leetcode.com/problems/complement-of-base-10-integer/
 *
 * https://leetcode.com/problems/complement-of-base-10-integer/discuss/879895/php-simple-one-line-solution-faster-than-100
 */

class Solution
{
    /**
     * @param Integer $N
     * @return Integer
     */
    function bitwiseComplement($N)
    {
        return bindec(str_replace(['1', '0', '2'], ['2', '1', '0'], decbin($N)));
    }
}