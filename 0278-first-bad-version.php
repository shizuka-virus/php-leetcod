<?php

/**
 * 278. First Bad Version
 * https://leetcode.com/problems/first-bad-version/
 */

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */
class Solution extends VersionControl
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n)
    {
        $answers = [false => 0, true => $n];
        while ($answers[true] > $answers[false] + 1) {
            $middle = floor(($answers[true] + $answers[false]) / 2);
            $answers[$this->isBadVersion($middle)] = $middle;
        }
        return $answers[true];
    }
}