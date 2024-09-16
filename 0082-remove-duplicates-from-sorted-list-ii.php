<?php

/**
 * 82. Remove Duplicates from Sorted List II
 * https://leetcode.com/problems/remove-duplicates-from-sorted-list-ii/
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
    function deleteDuplicates($head)
    {
        $cur = $head = new ListNode(0, $head);

        while ($cur->next) {
            if ($cur->next->next && $cur->next->val == $cur->next->next->val) {
                if (!$cur->next->next->next || $cur->next->val != $cur->next->next->next->val) {
                    $cur->next = $cur->next->next->next;
                } else {
                    $cur->next = $cur->next->next;
                }
            } else {
                $cur = $cur->next;
            }
        }

        return $head->next;
    }
}