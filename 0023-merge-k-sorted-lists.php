<?php

/**
 * 23. Merge k Sorted Lists
 * https://leetcode.com/problems/merge-k-sorted-lists/
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

    function mergeTwo($a, $b)
    {
        $head = $c = new ListNode();

        while ($a !== null && $b !== null) {
            if ($a->val < $b->val) {
                $c->next = $a;
                $a = $a->next;
            } else {
                $c->next = $b;
                $b = $b->next;
            }
            $c = $c->next;
        }

        $c->next = $a ?? $b;

        return $head->next;
    }

    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists)
    {
        $lists = array_values(array_filter($lists, function ($a) {
            return $a !== null;
        }));

        while (count($lists) > 1) {
            $i = 0;
            while (isset($lists[$i]) && isset($lists[$i + 1])) {
                $lists[$i] = $this->mergeTwo($lists[$i], $lists[$i + 1]);
                unset($lists[$i + 1]);
                $i += 2;
            }
            $lists = array_values($lists);
        }

        return $lists[0] ?? null;
    }
}