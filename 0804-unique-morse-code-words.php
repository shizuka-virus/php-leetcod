<?php

/**
 * 804. Unique Morse Code Words
 * https://leetcode.com/problems/unique-morse-code-words/
 */

class Solution
{
    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words)
    {
        $morse = [".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..", "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-", "-.--", "--.."];

        return count(array_unique(array_map(function ($word) use ($morse) {
            return implode('', array_map(function ($ch) use ($morse) {
                return $morse[ord($ch) - 97];
            }, str_split($word)));
        }, $words)));
    }
}