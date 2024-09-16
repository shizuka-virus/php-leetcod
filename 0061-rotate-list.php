<?php

/**
 * 61. Rotate List
 * https://leetcode.com/problems/rotate-list/
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{
    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function rotateRight($head, $k)
    {
        if (!$head || !$k) return $head;

        $array = [];

        while ($head) list($array[], $head) = [$head->val, $head->next];
        $k %= count($array);


        for ($i = count($array) - 1 - $k; $i >= -$k; $i--)
            $head = new ListNode($array[$i < 0 ? $i + count($array) : $i], $head);

        return $head;
    }
}