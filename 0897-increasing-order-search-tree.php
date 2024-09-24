<?php

/**
 * 897. Increasing Order Search Tree
 * https://leetcode.com/problems/increasing-order-search-tree/
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
     * @param TreeNode $root
     * @return TreeNode
     */
    function increasingBST($root)
    {
        $flag = 1;
        $root = new TreeNode(0, null, $root);

        while ($flag) {
            $flag = 0;
            $node = $root;
            while ($node->right->right && !$node->right->left) $node = $node->right;
            if ($node->right->left) {
                $node2 = $node->right;
                $node->right = $node2->left;
                $node2->left = null;
                while ($node->right) $node = $node->right;
                $node->right = $node2;
                $flag = 1;
            }
        }

        return $root->right;
    }
}