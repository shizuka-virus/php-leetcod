<?php

/**
 * 98. Validate Binary Search Tree
 * https://leetcode.com/problems/validate-binary-search-tree/
 *
 * https://leetcode.com/problems/validate-binary-search-tree/discuss/974378/PHP-JavaScript-Swift-Simple-solution-with-recursion
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
     * @param int|null $less
     * @param int|null $greater
     * @return Boolean
     */
    function isValidBST($root, $less = null, $greater = null)
    {
        return !$root || (
                ($less === null || $root->val < $less) &&
                ($greater === null || $root->val > $greater) &&
                (!$root->left || ($root->left->val < $root->val && $this->isValidBST($root->left, $root->val, $greater))) &&
                (!$root->right || ($root->right->val > $root->val && $this->isValidBST($root->right, $less, $root->val)))
            );
    }
}