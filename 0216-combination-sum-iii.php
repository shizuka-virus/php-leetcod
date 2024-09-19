<?php

/**
 * 216. Combination Sum III
 * https://leetcode.com/problems/combination-sum-iii/
 */

class Solution
{

    private $result = [];

    function recursion($k, $n, $nums = [], $kNow = 1, $iMin = 1)
    {
        $array_sum = array_sum($nums);
        for ($i = $iMin; $i <= 9; $i++)
            if (!in_array($i, $nums))
                if ($k > $kNow && $array_sum + $i <= $n) {
                    $this->recursion($k, $n, array_merge($nums, [$i]), $kNow + 1, $i + 1);
                } elseif ($array_sum + $i == $n) {
                    $this->result[] = array_merge($nums, [$i]);
                }
    }

    /**
     * @param Integer $k
     * @param Integer $n
     * @return Integer[][]
     */
    function combinationSum3($k, $n)
    {
        $this->recursion($k, $n);
        return $this->result;
    }
}