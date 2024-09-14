<?php

/**
 * 14. Longest Common Prefix
 * https://leetcode.com/problems/longest-common-prefix/
 */

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $ch = 0;
        $strsCount = count($strs);
        if (!$strsCount) return '';
        if ($strsCount == 1) return $strs[0];
        while (true) {
            for ($i = 1; $i < $strsCount; $i++)
                if (($strs[$i][$ch] ?? true) !== ($strs[$i - 1][$ch] ?? false))
                    return substr($strs[0], 0, $ch);
            $ch++;
        }
    }
}