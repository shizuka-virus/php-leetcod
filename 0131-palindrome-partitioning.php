<?php

/**
 * 131. Palindrome Partitioning
 * https://leetcode.com/problems/palindrome-partitioning/
 */

class Solution
{

    private $result = [];

    function recursion($s, $now, $from, $to)
    {
        for ($i = $from + 1; $i <= $to; $i++) {
            $str = substr($s, $from, $i - $from);
            if ($i - $from === 1 || $str === strrev($str))
                $this->recursion($s, array_merge($now, [$str]), $i, $to);
        }
        if ($from == $to) $this->result[] = $now;
    }

    /**
     * @param String $s
     * @return String[][]
     */
    function partition($s)
    {
        $this->recursion($s, [], 0, strlen($s));
        return $this->result;
    }
}