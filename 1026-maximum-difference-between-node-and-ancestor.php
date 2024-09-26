<?php

/**
 * 1026. Maximum Difference Between Node and Ancestor
 * https://leetcode.com/problems/maximum-difference-between-node-and-ancestor/
 *
 * https://leetcode.com/problems/maximum-difference-between-node-and-ancestor/discuss/929392/PHP-Easy-O(n)-solution-with-recursion
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

    private $max = 0;

    function recursion($cur, $min, $max)
    {
        if ($cur->val > $max || $cur->val < $min) {
            $min = $cur->val < $min ? $cur->val : $min;
            $max = $cur->val > $max ? $cur->val : $max;
            $this->max = $max - $min > $this->max ? $max - $min : $this->max;
        }
        if ($cur->left) $this->recursion($cur->left, $min, $max);
        if ($cur->right) $this->recursion($cur->right, $min, $max);
    }

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxAncestorDiff($root)
    {
        $this->recursion($root, $root->val, $root->val);
        return $this->max;
    }
}