<?php

/**
 * 623. Add One Row to Tree
 * https://leetcode.com/problems/add-one-row-to-tree/
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
     * @param Integer  $v
     * @param Integer  $d
     * @return TreeNode
     */
    function addOneRow($root, $v, $d)
    {
        if (!$root) return $root;

        if ($d == 1) return new TreeNode($v, $root);

        if ($d == 2) {
            $root->left = new TreeNode($v, $root->left);
            $root->right = new TreeNode($v, null, $root->right);
        } else {
            $root->left = $this->addOneRow($root->left, $v, $d - 1);
            $root->right = $this->addOneRow($root->right, $v, $d - 1);
        }

        return $root;
    }
}