<?php

/**
 * 1700. Number of Students Unable to Eat Lunch
 * https://leetcode.com/problems/number-of-students-unable-to-eat-lunch/
 *
 * https://leetcode.com/problems/number-of-students-unable-to-eat-lunch/discuss/987313/PHP-Simple-solution
 */

class Solution
{
    /**
     * @param Integer[] $students
     * @param Integer[] $sandwiches
     * @return Integer
     */
    function countStudents($students, $sandwiches)
    {
        $toEnd = 0;

        while (count($students) + 1 > $toEnd && count($students)) {
            $st = array_shift($students);
            if ($st == $sandwiches[0]) {
                array_shift($sandwiches);
                $toEnd = 0;
            } else {
                $students[] = $st;
                $toEnd++;
            }
        }

        return count($students);
    }
}