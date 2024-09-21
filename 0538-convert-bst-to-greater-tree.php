<?php

/**
 * 538. Convert BST to Greater Tree
 * https://leetcode.com/problems/convert-bst-to-greater-tree/
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

    function change($node, $carry = 0)
    {
        if ($node->right) $carry = $this->change($node->right, $carry);
        $carry = $node->val += $carry;
        if ($node->left) $carry = $this->change($node->left, $carry);
        return $carry;
    }

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function convertBST($root)
    {
        if ($root) $this->change($root);
        return $root;
    }
}