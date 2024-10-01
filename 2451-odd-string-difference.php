<?php

/**
 * 2451. Odd String Difference
 * https://leetcode.com/problems/odd-string-difference/
 */

class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function oddString($words) {        
        $diff = [];
        
        for ($i = 0; $i < count($words); $i++) {
            $add = [];
            for ($j = 1; $j < strlen($words[$i]); $j++)
                $add[] = ord($words[$i][$j]) - ord($words[$i][$j-1]);
            $diff[] = implode('-', $add);
        }
        
        $result = [];
        
        for ($k = 0; $k < count($diff); $k++) {
            if (isset($result[$diff[$k]])) $result[$diff[$k]][] = $k; else $result[$diff[$k]] = [$k];
        }
        
        foreach ($result as $keys)
            if (count($keys) == 1) return $words[$keys[0]];
    }
}