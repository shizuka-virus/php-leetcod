<?php

/**
 * 71. Simplify Path
 * https://leetcode.com/problems/simplify-path/
 */

class Solution
{
    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path)
    {
        $arr = explode("/", preg_replace("/\/+/i", "/", trim($path, "/")));
        $res = [];

        foreach ($arr as $val)
            switch ($val) {
                case ".":
                    break;
                case "..":
                    array_pop($res);
                    break;
                default:
                    $res[] = $val;
            }
        return "/" . implode("/", $res);
    }
}