<?php

/**
 * 2452. Words Within Two Edits of Dictionary
 * https://leetcode.com/problems/words-within-two-edits-of-dictionary/
 */

class Solution {

    /**
     * @param String[] $queries
     * @param String[] $dictionary
     * @return String[]
     */
    function twoEditWords($queries, $dictionary) {
        $len = strlen($queries[0]);
        $result = [];
        
        for ($q = 0; $q < count($queries); $q++)
            for ($d = 0; $d < count($dictionary); $d++) {
                $errs = 0;
                for ($i = 0; $i < $len; $i++) 
                    if ($queries[$q][$i] !== $dictionary[$d][$i]) $errs++;
                if ($errs <= 2) {
                    $result[] = $queries[$q];
                    continue 2;
                }
            }
        
        return $result;
    }
}