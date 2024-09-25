<?php

/**
 * 987. Vertical Order Traversal of a Binary Tree
 * https://leetcode.com/problems/vertical-order-traversal-of-a-binary-tree/
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

    private $data = [];

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function verticalTraversal($root, $x = 0, $y = 0)
    {
        if ($y == 0) $this->data = [];

        if (!isset($this->data[$x])) $this->data[$x] = [];
        if (!isset($this->data[$x][$y])) $this->data[$x][$y] = [];
        $this->data[$x][$y][] = $root->val;

        if ($root->left) $this->verticalTraversal($root->left, $x - 1, $y + 1);
        if ($root->right) $this->verticalTraversal($root->right, $x + 1, $y + 1);

        if ($y == 0) {
            ksort($this->data);
            $this->data = array_map(function ($a) {
                $res = [];
                ksort($a);
                foreach ($a as $aa) {
                    sort($aa);
                    foreach ($aa as $aaa) $res[] = $aaa;
                }
                return $res;
            }, $this->data);
            return $this->data;
        }
    }
}