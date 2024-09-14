<?php

/**
 * 17. Letter Combinations of a Phone Number
 * https://leetcode.com/problems/letter-combinations-of-a-phone-number/
 */

class Solution
{

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits)
    {
        if ($digits === "") return [];

        $data = ['abc', 'def', 'ghi', 'jkl', 'mno', 'pqrs', 'tuv', 'wxyz'];
        $result = [''];

        for ($i = 0; $i < strlen($digits); $i++) {
            $j = count($result);
            while ($j--) {
                $prev = array_shift($result);
                array_push($result, ...array_map(function ($ch) use ($prev) {
                    return $prev . $ch;
                }, str_split($data[$digits[$i] - 2])));
            }
        }

        return $result;
    }
}

class Solution2
{
    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits)
    {
        if ($digits == "") return [];

        $data = [2 => 'abc', 3 => 'def', 4 => 'ghi', 5 => 'jkl', 6 => 'mno', 7 => 'pqrs', 8 => 'tuv', 9 => 'wxyz'];
        $result = [''];

        foreach (str_split($digits) as $digit) {
            $new = [];
            foreach ($result as $prev)
                foreach (str_split($data[$digit]) as $ch) {
                    $new[] = $prev . $ch;
                }
            $result = $new;
        }
        return $result;
    }
}