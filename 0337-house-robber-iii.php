<?php

/**
 * 337. House Robber III
 * https://leetcode.com/problems/house-robber-iii/
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
     * @param bool $isChild
     * @return array|Integer
     */
    function rob($root, $isChild = false)
    {
        if (!$root) return $isChild ? [0, 0] : 0;

        $left = $this->rob($root->left, 1);
        $right = $this->rob($root->right, 1);

        $result = [$root->val + $left[1] + $right[1], max($left) + max($right)];

        return $isChild ? $result : max($result);
    }
}