<?php

/**
 * 1028. Recover a Tree From Preorder Traversal
 * https://leetcode.com/problems/recover-a-tree-from-preorder-traversal/
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
     * @param String $S
     * @return TreeNode
     */
    function recoverFromPreorder($S)
    {
        if (is_numeric($S)) return new TreeNode((int)$S);

        $splitted = explode(":", preg_replace("/(\d)(-\d)/", "\\1:\\2", preg_replace("/(\d)(-\d)/", "\\1:\\2", $S)));

        $l = isset($splitted[1]) ? $this->recoverFromPreorder(preg_replace("/\-(\d)/", "\\1", $splitted[1])) : null;
        $r = isset($splitted[2]) ? $this->recoverFromPreorder(preg_replace("/\-(\d)/", "\\1", $splitted[2])) : null;

        return new TreeNode((int)$splitted[0], $l, $r);
    }
}