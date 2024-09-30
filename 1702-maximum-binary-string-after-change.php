<?php

/**
 * 1702. Maximum Binary String After Change
 * https://leetcode.com/problems/maximum-binary-string-after-change/
 *
 * https://leetcode.com/problems/maximum-binary-string-after-change/discuss/987336/PHP-Simple-solution-with-counting-%220%22-and-%221%22
 */

class Solution
{
    /**
     * @param String $binary
     * @return String
     */
    function maximumBinaryString($binary)
    {
        $firstOne = 0;
        while ($binary[$firstOne] == "1") $firstOne++;
        $binary = substr($binary, $firstOne);

        $one = substr_count($binary, "1");
        $zer = strlen($binary) - substr_count($binary, "1");

        return str_repeat('1', $firstOne) . ($zer > 1 ? str_repeat('1', $zer - 1) : '') . ($zer ? '0' : '') . str_repeat('1', $one);
    }
}