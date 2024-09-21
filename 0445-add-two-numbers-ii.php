<?php

/**
 * 445. Add Two Numbers II
 * https://leetcode.com/problems/add-two-numbers-ii/
 *
 * https://leetcode.com/problems/add-two-numbers-ii/discuss/927309/PHP-Short-and-simple-solution-faster-than-100-time
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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        do $s1 = $l1->val . $s1 ?? ''; while ($l1 = $l1->next);
        do $s2 = $l2->val . $s2 ?? ''; while ($l2 = $l2->next);

        for ($i = 0, $add = 0; $i <= strlen($s1) || $i <= strlen($s2); $i++) {
            $val = ($s1[$i] ?? 0) + ($s2[$i] ?? 0) + $add;
            $add = $val >= 10 ? 1 : 0;
            $head = new ListNode($val % 10, $next = $head ?? null);
        }

        return $head->val ? $head : $head->next;
    }
}