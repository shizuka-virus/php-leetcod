<?php

/**
 * 104. Maximum Depth of Binary Tree
 * https://leetcode.com/problems/maximum-depth-of-binary-tree/
 *
 * https://leetcode.com/problems/maximum-depth-of-binary-tree/discuss/955722/PHP-Swift-One-line-solution
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
     * @return Integer
     */
    function maxDepth($root)
    {
        return $root ? 1 + max($this->maxDepth($root->left), $this->maxDepth($root->right)) : 0;
    }
}