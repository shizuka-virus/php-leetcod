<?php

/**
 * 101. Symmetric Tree
 * https://leetcode.com/problems/symmetric-tree/
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

    function compare($a, $b)
    {
        if (!$a || !$b) return !$a && !$b;
        return $a->val === $b->val && $this->compare($a->left, $b->right) && $this->compare($a->right, $b->left);
    }

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root)
    {
        return $this->compare($root->left, $root->right);
    }
}