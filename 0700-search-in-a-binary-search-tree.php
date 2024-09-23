<?php

/**
 * 700. Search in a Binary Search Tree
 * https://leetcode.com/problems/search-in-a-binary-search-tree/
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
     * @param Integer  $val
     * @return TreeNode
     */
    function searchBST($root, $val)
    {
        while ($root && $root->val !== $val)
            $root = $val < $root->val ? $root->left : $root->right;
        return $root;
    }
}

class Solution2
{
    /**
     * @param TreeNode $root
     * @param Integer  $val
     * @return TreeNode
     */
    function searchBST($root, $val)
    {
        return !$root || $root->val == $val ? $root : $this->searchBST($val > $root->val ? $root->right : $root->left, $val);
    }
}