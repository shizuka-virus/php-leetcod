<?php

/**
 * 1694. Reformat Phone Number
 * https://leetcode.com/problems/reformat-phone-number/
 *
 * https://leetcode.com/problems/reformat-phone-number/discuss/978601/PHP-Simple-solution-with-explanations
 */

class Solution
{
    /**
     * @param String $number
     * @return String
     */
    function reformatNumber($number)
    {
        // replace all "-" and " "
        $number = str_replace(['-', ' '], '', $number);

        // split number by 3 digits
        $array = str_split($number, 3);

        if (strlen($array[count($array) - 1]) < 2 && count($array) > 1) {
            // if there is only 1 digit at the end,
            // then we will transfer there another one from the previous
            $array[count($array) - 1] = substr($array[count($array) - 2], -1) . $array[count($array) - 1];
            $array[count($array) - 2] = substr($array[count($array) - 2], 0, 2);
        }
        // collect into a string with "-" separator
        return implode('-', $array);
    }
}