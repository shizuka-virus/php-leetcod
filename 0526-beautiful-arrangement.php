<?php

/**
 * 526. Beautiful Arrangement
 * https://leetcode.com/problems/beautiful-arrangement/
 */

class Solution
{
    function recursion(&$map, $prev, $i, &$n)
    {
        $result = 0;

        foreach ($map[$i] as $v)
            if (array_search($v, $prev) === false)
                $result += $i === $n ? 1 : $this->recursion($map, array_merge($prev, [$v]), $i + 1, $n);

        return $result;
    }

    /**
     * @param Integer $n
     * @return Integer
     */
    function countArrangement($n)
    {
        $map = [];

        for ($i = 1; $i <= $n; $i++)
            for ($j = 1; $j <= $i; $j++)
                if ($i % $j == 0) $map[$i][$j] = $map[$j][$i] = true;

        $map = array_map(function ($a) {
            return array_keys($a);
        }, $map);

        return $this->recursion($map, [], 1, $n);
    }
}