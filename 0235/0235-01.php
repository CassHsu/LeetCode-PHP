<?php
class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        if ($p->val > $root->val && $q->val > $root->val) {
            return $this->lowestCommonAncestor($root->right, $p, $q);
            
        } else if ($p->val < $root->val && $q->val < $root->val) {
            return $this->lowestCommonAncestor($root->left, $p, $q);
            
        } else {
            return $root;
        }
    }
}
