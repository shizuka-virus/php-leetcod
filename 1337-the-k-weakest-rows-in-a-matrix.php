<?php

/**
 * 1337. The K Weakest Rows in a Matrix
 * https://leetcode.com/problems/the-k-weakest-rows-in-a-matrix/
 */

class Solution
{
    /**
     * @param Integer[][] $mat
     * @param Integer     $k
     * @return Integer[]
     */
    function kWeakestRows($mat, $k)
    {
        $arr = [];
        foreach ($mat as $key => $row) {
            $sum = array_sum($row);
            if (isset($arr[$sum])) {
                $arr[$sum][] = $key;
            } else {
                $arr[$sum] = [$key];
            }
        }
        ksort($arr);
        $keys = array_reduce($arr, function ($res, $v) {
            return array_merge($res, $v);
        }, []);
        return array_slice($keys, 0, $k);
    }
}