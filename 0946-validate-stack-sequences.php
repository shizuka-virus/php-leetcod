<?php

/**
 * 946. Validate Stack Sequences
 * https://leetcode.com/problems/validate-stack-sequences/
 */

class Solution
{
    /**
     * @param Integer[] $pushed
     * @param Integer[] $popped
     * @return Boolean
     */
    function validateStackSequences($pushed, $popped)
    {
        $stack = [];
        $i = 0;

        foreach ($pushed as $push) {
            $stack[] = $push;
            while (count($stack) && $stack[count($stack) - 1] == $popped[$i]) {
                array_pop($stack);
                $i++;
            }
        }

        return empty($stack);
    }
}