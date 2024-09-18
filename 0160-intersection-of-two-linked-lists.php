<?php

/**
 * 160. Intersection of Two Linked Lists
 * https://leetcode.com/problems/intersection-of-two-linked-lists/
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
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    function getIntersectionNode($headA, $headB)
    {
        $countA = $countB = 0;

        for ($cur = $headA; $cur; $cur = $cur->next) $countA++;
        for ($cur = $headB; $cur; $cur = $cur->next) $countB++;

        while ($countA > $countB) {
            $countA--;
            $headA = $headA->next;
        }
        while ($countB > $countA) {
            $countB--;
            $headB = $headB->next;
        }

        while ($headA !== $headB) {
            $headA = $headA->next;
            $headB = $headB->next;
        }

        return $headA;
    }
}