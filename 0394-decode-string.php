<?php

/**
 * 394. Decode String
 * https://leetcode.com/problems/decode-string/
 *
 * https://leetcode.com/problems/decode-string/discuss/941415/PHP-Easy-solution-with-Regex-0ms
 */

class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function decodeString($s)
    {
        while ($n = preg_match_all('/(\d+)\[([^\[\]]+)\]/U', $s, $match))
            for ($m = 0; $m < $n; $m++) {
                $replace = '';
                while ($match[1][$m]--) $replace .= $match[2][$m];
                $s = str_replace($match[0][$m], $replace, $s);
            }

        return $s;
    }
}