<?php

/**
 * 49. Group Anagrams
 * https://leetcode.com/problems/group-anagrams/
 */

class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $map = [];
        foreach ($strs as $str) {
            $s = str_split($str);
            sort($s);
            $s = implode('', $s);
            if (isset($map[$s])) {
                $map[$s][] = $str;
            } else {
                $map[$s] = [$str];
            }
        }
        return array_values($map);
    }
}