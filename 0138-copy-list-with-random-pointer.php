<?php

/**
 * 138. Copy List with Random Pointer
 * https://leetcode.com/problems/copy-list-with-random-pointer/
 */

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $next = null;
 *     public $random = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->next = null;
 *         $this->random = null;
 *     }
 * }
 */
class Solution
{
    /**
     * @param Node $head
     * @return Node
     */
    function copyRandomList($head)
    {
        $map = [];

        for ($cur = $head; $cur; $cur = $cur->next)
            $map[spl_object_hash($cur)] = [$cur, new Node($cur->val)];

        for ($cur = $head; $cur; $cur = $cur->next) {
            $map[spl_object_hash($cur)][1]->next = $map[spl_object_hash($cur->next)][1] ?? null;
            $map[spl_object_hash($cur)][1]->random = $map[spl_object_hash($cur->random)][1] ?? null;
        }

        return $map[spl_object_hash($head)][1];
    }
}