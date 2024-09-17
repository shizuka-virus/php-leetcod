<?php

/**
 * 110. Balanced Binary Tree
 * https://leetcode.com/problems/balanced-binary-tree/
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

    function recursion($node)
    {
        if (!$node) return 1;
        $l = $this->recursion($node->left);
        $r = $this->recursion($node->right);
        return !$l || !$r || abs($l - $r) > 1 ? 0 : max($l, $r) + 1;
    }

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root)
    {
        return $this->recursion($root) > 0;
    }
}