<?php

/**
 * 25. Reverse Nodes in k-Group
 * https://leetcode.com/problems/reverse-nodes-in-k-group/
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
    function reverseKGroup($head, $k)
    {
        if ($k === 1) return $head;

        $current = $head;
        for ($i = 1; $i < $k; $i++)
            if (!$current = $current->next) return $head;

        $current = $head;
        for ($i = 1; $i < $k; $i++) {
            $node = $current->next;
            $current->next = $node->next;
            $node->next = $head;
            $head = $node;
        }

        $current->next = $this->reverseKGroup($current->next, $k);

        return $head;
    }
}