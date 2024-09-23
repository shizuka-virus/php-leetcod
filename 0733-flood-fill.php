<?php

/**
 * 733. Flood Fill
 * https://leetcode.com/problems/flood-fill/
 */

class Solution
{
    /**
     * @param Integer[][] $image
     * @param Integer     $sr
     * @param Integer     $sc
     * @param Integer     $newColor
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $newColor)
    {
        $stack = [[$sr, $sc]];
        $color = $image[$sr][$sc];

        if ($color != $newColor)
            while (!empty($stack)) {
                [$r, $c] = array_pop($stack);
                $image[$r][$c] = $newColor;
                foreach ([[$r - 1, $c], [$r, $c - 1], [$r + 1, $c], [$r, $c + 1]] as [$rr, $cc])
                    if (isset($image[$rr][$cc]) && $image[$rr][$cc] == $color) $stack[] = [$rr, $cc];
            }

        return $image;
    }
}