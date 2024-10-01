<?php

/**
 * 1721. Swapping Nodes in a Linked List
 * https://leetcode.com/problems/swapping-nodes-in-a-linked-list/
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
     * @param Integer  $k
     * @return ListNode
     */
    function swapNodes($head, $k)
    {
        if (!$head->next) return $head;

        $head = new ListNode(0, $head);
        $one = $two = $end = $head;

        $i = $k - 1;
        while ($end->next) {
            $end = $end->next;
            if ($i > 0) $one = $one->next;
            if ($i-- < 0) $two = $two->next;
        }

        if ($one == $two) return $head->next;

        if ($one->next == $two) {
            [$one->next, $two->next->next, $two->next] = [$two->next, $two, $two->next->next];
        } elseif ($two->next == $one) {
            [$two->next, $one->next->next, $one->next] = [$one->next, $one, $one->next->next];
        } else {
            $elone = $one->next;
            $eltwo = $two->next;

            $one->next = $one->next->next;
            $two->next = $two->next->next;

            $elone->next = $two->next;
            $two->next = $elone;

            $eltwo->next = $one->next;
            $one->next = $eltwo;
        }

        return $head->next;
    }
}