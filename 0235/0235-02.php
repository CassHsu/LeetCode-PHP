<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        $pv = $p->val;
        $qv = $q->val;
        
        while ($root) {
            if ($pv > $root->val && $qv > $root->val) {
                $root = $root->right;
                
            } else if ($pv < $root->val && $qv < $root->val) {
                $root = $root->left;
            } else {
                return $root;
            }
        }
        
        return null;
    }
}
