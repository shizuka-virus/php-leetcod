<?php

/**
 * 199. Binary Tree Right Side View
 * https://leetcode.com/problems/binary-tree-right-side-view/
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
     * @return Integer[]
     */
    function rightSideView($root)
    {
        $stack = [$root];
        $ans = [];

        while (count($stack)) {
            $new = [];
            for ($i = 0; $i < count($stack); $i++) {
                if ($i === 0) $ans[] = $stack[$i]->val;
                if ($stack[$i]->right !== null) $new[] = $stack[$i]->right;
                if ($stack[$i]->left !== null) $new[] = $stack[$i]->left;
            }
            $stack = $new;
        }

        return $ans;
    }
}