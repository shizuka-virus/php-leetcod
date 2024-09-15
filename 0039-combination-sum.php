<?php

/**
 * 39. Combination Sum
 * https://leetcode.com/problems/combination-sum/
 */

class Solution
{

    private $result = [];

    function recursion($candidates, $target, $combination = [])
    {
        list($combBuf, $sumBuf) = [$combination, array_sum($combination)];

        while ($value = array_shift($candidates)) {
            list($combination, $sum) = [$combBuf, $sumBuf];
            do {
                $combination[] = $value;
                $sum += $value;
                if ($target > $sum) {
                    $this->recursion($candidates, $target, $combination);
                } elseif ($target === $sum) {
                    $this->result[] = $combination;
                }
            } while ($target > $sum);
        }
    }

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {
        $this->recursion($candidates, $target);
        return $this->result;
    }
}