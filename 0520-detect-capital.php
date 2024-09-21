<?php

/**
 * 520. Detect Capital
 * https://leetcode.com/problems/detect-capital/
 */

class Solution
{
    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word)
    {
        return preg_match('/^[A-Z]*$/', $word) ||
            preg_match('/^[a-z]*$/', $word) ||
            preg_match('/^[A-Z][a-z]*$/', $word);
    }
}