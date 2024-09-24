<?php

/**
 * 880. Decoded String at Index
 * https://leetcode.com/problems/decoded-string-at-index/
 */

class Solution
{
    /**
     * @param String $S
     * @param Integer $K
     * @return String
     */
    function decodeAtIndex($S, $K)
    {
        for ($len = 0, $i = 0; $i < strlen($S); $i++) {
            if (is_numeric($S[$i])) {
                $num = (int)$S[$i];
                $count = 0;
                for (; $count < $num - 1 && $K > $len; $count++) {
                    $K -= $len;
                }
                if ($count != $num - 1) {
                    return $this->decodeAtIndex($S, $K);
                } else {
                    $len *= $num;
                }
            } else {
                $len++;
                $K--;
                if ($K == 0) {
                    return $S[$i];
                }
            }
        }
    }
}