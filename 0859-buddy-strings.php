<?php

/**
 * 859. Buddy Strings
 * https://leetcode.com/problems/buddy-strings/
 */

class Solution
{
    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    function buddyStrings($A, $B)
    {
        if (strlen($A) != strlen($B)) return false;
        if (strlen($A) >= 2 && $A == $B && count(array_flip(str_split($A))) < strlen($A))
            return true;

        $indx = [];
        for ($i = 0; $i < strlen($A); $i++)
            if ($A[$i] != $B[$i]) {
                $indx[] = $i;
                if (count($indx) > 2) return false;
            }

        if (count($indx) == 2 && $A[$indx[0]] == $B[$indx[1]] && $A[$indx[1]] == $B[$indx[0]])
            return true;

        return false;
    }
}