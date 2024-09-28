<?php

/**
 * 1457. Pseudo-Palindromic Paths in a Binary Tree
 * https://leetcode.com/problems/pseudo-palindromic-paths-in-a-binary-tree/
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
    function pseudoPalindromicPaths($root, $prev = [])
    {
        if (!$root) return 0;
        if (isset($prev[$root->val])) unset($prev[$root->val]); else $prev[$root->val] = true;
        if (!$root->left && !$root->right) return count($prev) < 2 ? 1 : 0;
        return $this->pseudoPalindromicPaths($root->left, $prev) + $this->pseudoPalindromicPaths($root->right, $prev);
    }
}