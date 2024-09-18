<?php

/**
 * 147. Insertion Sort List
 * https://leetcode.com/problems/insertion-sort-list/
 *
 * https://leetcode.com/problems/insertion-sort-list/discuss/921126/php-easy-solution-with-commentaries
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
    function insertionSortList($head)
    {
        $cur = $head;
        while ($cur->next) {
            if ($cur->next->val >= $cur->val) {
                // elements is already in the right spot, moving on to the next one
                $cur = $cur->next;
            } else {
                // taking the element out
                $node = $cur->next;
                $cur->next = $node->next;
                $node->next = null;
                // looking for the right position for this element
                $prev = null;
                $pos = $head;
                while ($pos && $pos->val <= $node->val) {
                    // going forward until the right spot is found or the list is over
                    $prev = $pos;
                    $pos = $pos->next;
                }
                // found the right positions, inserting the element
                $node->next = $pos;
                if ($prev) {
                    $prev->next = $node;
                } else {
                    // in case the node got placed at the start of the list
                    $head = $node;
                }
            }
        }
        return $head;
    }
}