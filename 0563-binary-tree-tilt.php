<?php

/**
 * 563. Binary Tree Tilt
 * https://leetcode.com/problems/binary-tree-tilt/
 *
 * https://leetcode.com/problems/binary-tree-tilt/discuss/928216/PHP-Easy-recursive-solution
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

    private $sum = 0;

    function recursion($node)
    {
        if (!$node) return 0;

        $left = $this->recursion($node->left);
        $right = $this->recursion($node->right);

        $this->sum += abs($left - $right);

        return $left + $right + $node->val;
    }

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function findTilt($root)
    {
        $this->recursion($root);
        return $this->sum;
    }
}