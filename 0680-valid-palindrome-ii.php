<?php

/**
 * 680. Valid Palindrome II
 * https://leetcode.com/problems/valid-palindrome-ii/
 */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s, $flag = 0, $left = 0, $right = -1)
    {
        if ($right < 0) $right = strlen($s) - 1;
        while ($left < $right) {
            if ($s[$left] !== $s[$right]) {
                // символы не совпадают, но одна ошибка разрешена
                // для этого у нас есть $flag указывающий сколько ошибок уже было
                // если ошибка уже была, возвращаем false, иначе проверяем варианты
                return $flag ? false : $this->validPalindrome($s, 1, $left + 1, $right) ||
                    $this->validPalindrome($s, 1, $left, $right - 1);
            }
            $left++;
            $right--;
        }
        return true;
    }
}