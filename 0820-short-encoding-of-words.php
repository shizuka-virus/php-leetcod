<?php

/**
 * 820. Short Encoding of Words
 * https://leetcode.com/problems/short-encoding-of-words/
 */

class Solution
{
    /**
     * @param String[] $words
     * @return Integer
     */
    function minimumLengthEncoding($words)
    {
        usort($words, function ($a, $b) {
            return strlen($b) - strlen($a);
        });

        $ans = 0;
        $map = [];

        foreach ($words as $word)
            if (!isset($map[$word])) {
                $ans += strlen($word) + 1;
                for ($i = 0; $i < strlen($word); $i++)
                    $map[substr($word, $i)] = true;
            }

        return $ans;
    }
}