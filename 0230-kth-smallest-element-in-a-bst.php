<?php

/**
 * 230. Kth Smallest Element in a BST
 * https://leetcode.com/problems/kth-smallest-element-in-a-bst/
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
     * @param Integer  $k
     * @param Integer $now
     * @return Integer
     */
    function kthSmallest($root, $k, $now = 0)
    {
        if ($root->left) {
            $left = $this->kthSmallest($root->left, $k, $now);
            if ($left < 0) {
                $now = $left;
            } else {
                return $left;
            }
        }

        $now--;
        if ($now == -$k) {
            return $root->val;
        }

        if ($root->right) {
            return $this->kthSmallest($root->right, $k, $now);
        }

        return $now;
    }
}