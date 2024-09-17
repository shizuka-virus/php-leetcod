<?php

/**
 * 116. Populating Next Right Pointers in Each Node
 * https://leetcode.com/problems/populating-next-right-pointers-in-each-node/
 *
 * https://leetcode.com/problems/populating-next-right-pointers-in-each-node/discuss/934132/PHP-Easy-recursion-solution
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
        if ($root->left) {
            $root->left->next = $root->right;
            $this->connect($root->left);
        }
        if ($root->right) {
            $root->right->next = $root->next->left ?? null;
            $this->connect($root->right);
        }
        return $root;
    }
}