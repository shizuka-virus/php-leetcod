<?php

/**
 * 19. Remove Nth Node From End of List
 * https://leetcode.com/problems/remove-nth-node-from-end-of-list/
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
     * @param Integer  $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n)
    {
        $node = $head = new ListNode(0, $head);
        $end = $node->next;
        while (--$n) $end = $end->next;
        while ($end->next) {
            $end = $end->next;
            $node = $node->next;
        }
        $node->next = $node->next->next;
        return $head->next;
    }
}