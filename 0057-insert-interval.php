<?php

/**
 * 57. Insert Interval
 * https://leetcode.com/problems/insert-interval/
 */

class Solution
{
    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval)
    {
        $length = count($intervals);

        // if no intervals
        if (!$length) {
            return [$newInterval];
        }

        // if new interval is over than all
        if ($newInterval[0] > $intervals[$length - 1][1]) {
            $intervals[] = $newInterval;
            return $intervals;
        }

        // if new interval is lower than all
        if ($newInterval[1] < $intervals[0][0]) {
            array_unshift($intervals, $newInterval);
            return $intervals;
        }

        // ok, go for()
        for ($i = $length - 1; $i >= 0; $i--) {
            if ($i && $newInterval[1] >= $intervals[$i][0] && $newInterval[0] <= $intervals[$i - 1][1]) {
                $intervals[$i - 1][1] = $intervals[$i][1];
                unset($intervals[$i]);
                continue;
            }
            if ($i && $newInterval[1] < $intervals[$i][0] && $newInterval[0] > $intervals[$i - 1][1]) {
                array_splice($intervals, $i, 0, [$newInterval]);
                return $intervals;
            }
            if ($newInterval[1] > $intervals[$i][1] && $newInterval[0] <= $intervals[$i][1])
                $intervals[$i][1] = $newInterval[1];
            if ($newInterval[0] < $intervals[$i][0] && $newInterval[1] >= $intervals[$i][0])
                $intervals[$i][0] = $newInterval[0];
        }

        return $intervals;
    }
}