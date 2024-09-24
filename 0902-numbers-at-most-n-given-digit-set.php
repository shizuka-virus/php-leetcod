<?php

/**
 * 902. Numbers At Most N Given Digit Set
 * https://leetcode.com/problems/numbers-at-most-n-given-digit-set/
 *
 * https://leetcode.com/problems/numbers-at-most-n-given-digit-set/discuss/944244/PHP-Math-solution-(0-ms-faster-than-100.00)
 */

class Solution {

    function findSmaller($value, $digits) {
        return array_reduce($digits, function ($result, $digit) use ($value) {
            return $result + ($digit < $value ? 1 : 0);
        });
    }

    function findSmallerOrEqual($value, $digits) {
        return array_reduce($digits, function ($result, $digit) use ($value) {
            return $result + ($digit <= $value ? 1 : 0);
        });
    }

    /**
     * @param String[] $digits
     * @param Integer $n
     * @return Integer
     */
    function atMostNGivenDigitSet($digits, $n) {
        $combinations = 0;

        // step 1
        if ($n > 9) for ($i = 1; $i < strlen($n); $i++) $combinations += pow(count($digits), $i);

        // step 2
        while (strlen($n) > 1) {
            $leftNumber = substr($n, 0, 1);
            $n = substr($n, 1);

            if ($leftNumber == 0 && !in_array(0, $digits)) return $combinations;
            if (!$this->findSmallerOrEqual($leftNumber, $digits)) return $combinations;

            if ($leftNumber != 0) $combinations += pow(count($digits), strlen($n)) * $this->findSmaller($leftNumber, $digits);

            if (!in_array($leftNumber, $digits)) return $combinations;
        }

        // step 3
        $combinations += $this->findSmallerOrEqual($n, $digits);

        return $combinations;
    }
}