<?php

/**
 * 141. Linked List Cycle
 * https://leetcode.com/problems/linked-list-cycle/
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head)
    {
        $p1 = $p2 = $head;
        while ($p1 && $p2 && $p1->next && $p2->next && $p2->next->next) {
            $p1 = $p1->next;
            $p2 = $p2->next->next;
            if ($p1 === $p2) return true;
        }
        return false;
    }
}