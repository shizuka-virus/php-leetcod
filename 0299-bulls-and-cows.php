<?php

/**
 * 299. Bulls and Cows
 * https://leetcode.com/problems/bulls-and-cows/
 */

class Solution
{
    /**
     * @param String $secret
     * @param String $guess
     * @return String
     */

    function getHint($secret, $guess)
    {
        $bulls = $cows = 0;
        $secretChars = $guessChars = [];

        for ($i = 0; $i < strlen($secret); $i++) {
            if ($secret[$i] == $guess[$i]) {
                $bulls++;
            } else {
                $secretChars[] = $secret[$i];
                $guessChars[] = $guess[$i];
            }
        }
        foreach ($secretChars as $ch) {
            if (($k = array_search($ch, $guessChars)) !== FALSE) {
                $cows++;
                unset($guessChars[$k]);
            }
        }

        return $bulls . 'A' . $cows . 'B';
    }
}