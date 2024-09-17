<?php

/**
 * 117. Populating Next Right Pointers in Each Node II
 * https://leetcode.com/problems/populating-next-right-pointers-in-each-node-ii/
 */

/**
 * Definition for a Node.
 * class Node {
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->left = null;
 *         $this->right = null;
 *         $this->next = null;
 *     }
 * }
 */
class Solution
{
    /**
     * @param Node $root
     * @return Node
     */
    public function connect($root)
    {
        if ($root->left) $root->left->next = $root->right;
        $cur = $root;
        foreach ([$root->right, $root->left] as $el)
            if ($el) {
                while (!$el->next && $cur = $cur->next)
                    $el->next = $cur->left ?? $cur->right;
                $this->connect($el);
            }
        return $root;
    }
}