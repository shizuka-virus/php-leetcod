<?php

/**
 * 1675. Minimize Deviation in Array
 * https://leetcode.com/problems/minimize-deviation-in-array/
 */

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumDeviation($nums)
    {
        $nums = array_values(array_unique($nums));

        $a = 1;
        $b = 10 ** 9 + 1;

        foreach ($nums as $num)
            if ($num % 2 == 0) {
                $b = min($b, $num);
                while ($num % 2 == 0) $num /= 2;
                $a = max($a, $num);
            } else {
                $b = min($b, $num * 2);
                $a = max($a, $num);
            }

        $arr = [$a * 2, $b];

        foreach ($nums as $num) {
            while ($num > $a && $num % 2 == 0)
                $num /= 2;

            if ($num < $b && $num * 2 > $a)
                $arr[] = $num * 2;
        }

        $ans = max($arr) - min($arr);

        while (max($arr) % 2 == 0) {
            $max = max($arr);

            for ($i = 0; $i < count($arr); $i++)
                if ($arr[$i] == $max)
                    $arr[$i] /= 2;

            $ans = min($ans, max($arr) - min($arr));
        }

        return $ans;
    }
}