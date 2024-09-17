<?php

/**
 * 100. Same Tree
 * https://leetcode.com/problems/same-tree/
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{
    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        return ($p == null && $q == null) || ($p->val === $q->val && $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right));
    }
}