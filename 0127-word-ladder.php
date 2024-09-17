<?php

/**
 * 127. Word Ladder
 * https://leetcode.com/problems/word-ladder/
 */

class Solution
{
    /**
     * @param String   $beginWord
     * @param String   $endWord
     * @param String[] $wordList
     * @return Integer
     */
    function ladderLength($beginWord, $endWord, $wordList)
    {
        $ans = 1;
        $prev = $map = [];
        $stack = [$beginWord];

        foreach ($wordList as $w) $map[$w] = true;

        if (!isset($map[$endWord])) return 0;

        while (!empty($stack)) {
            $newStack = [];
            $ans++;
            while ($word = array_pop($stack)) {
                for ($i = 0; $i < strlen($word); $i++) {
                    $w = $word;
                    for ($j = 1; $j <= 26; $j++) {
                        $w[$i] = chr(96 + $j);
                        if (isset($map[$w]) && !isset($prev[$w])) {
                            if ($w == $endWord) return $ans;
                            $newStack[] = $w;
                            $prev[$w] = true;
                            unset($map[$w]);
                        }
                    }
                }
            }
            $stack = $newStack;
        }

        return 0;
    }
}