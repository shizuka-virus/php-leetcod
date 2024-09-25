<?php

/**
 * 938. Range Sum of BST
 * https://leetcode.com/problems/range-sum-of-bst/
 *
 * https://leetcode.com/problems/range-sum-of-bst/discuss/936755/PHP-Simple-recursion-O(n)
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
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high)
    {
        return ($root->val >= $low && $root->val <= $high ? $root->val : 0) +
            ($root->left ? $this->rangeSumBST($root->left, $low, $high) : 0) +
            ($root->right ? $this->rangeSumBST($root->right, $low, $high) : 0);
    }
}