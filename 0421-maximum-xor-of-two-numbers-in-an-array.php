<?php

/**
 * 421. Maximum XOR of Two Numbers in an Array
 * https://leetcode.com/problems/maximum-xor-of-two-numbers-in-an-array/
 *
 * TODO: too slow, need good algorithm!
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaximumXOR($nums)
    {
        // задаем начальный максимальный XOR из 0 и 1 (если существует) элемента
        $maxXOR = $nums[0] ^ ($nums[1] ?? $nums[0]);

        // сортируем в обратном порядке
        rsort($nums);

        // первый перебор элементов с ограничением в 20% от всех элементов
        // но гарантированно 1000 элементов
        for ($i = 0; $i < count($nums) - 1 && ($i < count($nums) / 5 || $i <= 1000); $i++)
            // второй перебор элементов всех оставшихся после элемента i
            for ($j = $i + 1; $j < count($nums); $j++)
                // сравнение с максимальным XOR и присвоение
                if (($nums[$i] ^ $nums[$j]) > $maxXOR)
                    $maxXOR = $nums[$i] ^ $nums[$j];

        return $maxXOR;
    }
}