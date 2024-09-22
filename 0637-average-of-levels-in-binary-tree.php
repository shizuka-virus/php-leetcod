<?php

/**
 * 637. Average of Levels in Binary Tree
 * https://leetcode.com/problems/average-of-levels-in-binary-tree/
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
     * @return Float[]
     */
    function averageOfLevels($root)
    {
        $result = [];

        for ($stack = [$root]; !empty($stack); $stack = $next) {
            $next = $values = [];

            foreach ($stack as $node)
                if ($node) {
                    $values[] = $node->val;
                    $next[] = $node->left;
                    $next[] = $node->right;
                }

            if (!empty($values)) {
                $result[] = array_sum($values) / count($values);
            }
        }

        return $result;
    }
}