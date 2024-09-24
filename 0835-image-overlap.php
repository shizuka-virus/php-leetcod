<?php

/**
 * 835. Image Overlap
 * https://leetcode.com/problems/image-overlap/
 */

class Solution
{

    private $XYofA = [];

    function getXYofArray($array)
    {
        $xy = [];
        foreach ($array as $x => $row)
            foreach ($row as $y => $val)
                if ($val == 1)
                    $xy[] = ['x' => $x, 'y' => $y];
        return $xy;
    }

    function compareArray($B, $dx, $dy)
    {
        $result = 0;
        foreach ($this->XYofA as $xy)
            if (
                isset($B[$xy['x'] + $dx][$xy['y'] + $dy]) &&
                $B[$xy['x'] + $dx][$xy['y'] + $dy] == 1
            ) $result++;
        return $result;
    }

    /**
     * @param Integer[][] $A
     * @param Integer[][] $B
     * @return Integer
     */
    function largestOverlap($A, $B)
    {
        $size = count($A);
        $maxResult = 0;
        $this->XYofA = $this->getXYofArray($A);
        for ($dx = 0 - $size; $dx < $size; $dx++)
            for ($dy = 0 - $size; $dy < $size; $dy++) {
                $res = $this->compareArray($B, $dx, $dy);
                if ($res > $maxResult) $maxResult = $res;
            }
        return $maxResult;
    }
}