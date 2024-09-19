<?php

/**
 * 234. Palindrome Linked List
 * https://leetcode.com/problems/palindrome-linked-list/
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
     * @return Boolean
     */
    function isPalindrome($head)
    {
        $head2 = null;
        while ($head) {
            $node = $head;
            $head = $head->next;
            $node->next = $head2;
            $head2 = $node;
            if ($head == $head2 || $head == $head2->next) return true;
        }
        return false;
    }
}