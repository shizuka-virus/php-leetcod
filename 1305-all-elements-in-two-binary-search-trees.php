<?php

/**
 * 1305. All Elements in Two Binary Search Trees
 * https://leetcode.com/problems/all-elements-in-two-binary-search-trees/
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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Integer[]
     */

    private $elements = [];

    function recursiveSearch($node)
    {
        if ($node === null || $node->val === null) return;
        $this->elements[] = $node->val;
        $this->recursiveSearch($node->left);
        $this->recursiveSearch($node->right);
    }

    function getAllElements($root1, $root2)
    {
        $this->recursiveSearch($root1);
        $this->recursiveSearch($root2);
        sort($this->elements);
        return $this->elements;
    }
}