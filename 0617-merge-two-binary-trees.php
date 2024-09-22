<?php

/**
 * 617. Merge Two Binary Trees
 * https://leetcode.com/problems/merge-two-binary-trees/
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
     * @param TreeNode $t1
     * @param TreeNode $t2
     * @return TreeNode
     */
    function mergeTrees($t1, $t2)
    {
        return !$t1 && !$t2 ? null : new TreeNode(
            ($t1->val ?? 0) + ($t2->val ?? 0),
            $this->mergeTrees($t1->left, $t2->left),
            $this->mergeTrees($t1->right, $t2->right));
    }
}