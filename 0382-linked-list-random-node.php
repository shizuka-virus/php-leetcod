<?php

/**
 * 382. Linked List Random Node
 * https://leetcode.com/problems/linked-list-random-node/
 *
 * https://leetcode.com/problems/linked-list-random-node/discuss/957399/PHP-JavaScript-Swift-O(n)-time-O(1)-space-reservoir-sampling
 *
 * Reservoir sampling
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

    private $head;

    /**
     * @param head The linked list's head.
     * Note that the head is guaranteed to be not null, so it contains at least one node.
     * @param ListNode $head
     */
    function __construct($head)
    {
        $this->head = $head;
    }

    /**
     * Returns a random node's value.
     * @return Integer
     */
    function getRandom()
    {
        $i = $val = 0;
        $node = $this->head;

        while ($node) {
            if (rand(1, ++$i) == $i) $val = $node->val;
            $node = $node->next;
        }

        return $val;
    }
}

/**
 * Your Solution object will be instantiated and called as such:
 * $obj = Solution($head);
 * $ret_1 = $obj->getRandom();
 */