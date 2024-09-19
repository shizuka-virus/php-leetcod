<?php

/**
 * 206. Reverse Linked List
 * https://leetcode.com/problems/reverse-linked-list/
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
     * @return ListNode
     */
    function reverseList($head)
    {
        $result = null;
        while ($head) {
            $one = $head;
            $head = $head->next;
            $one->next = $result;
            $result = $one;
        }
        return $result;
    }
}