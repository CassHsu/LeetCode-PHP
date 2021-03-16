<?php
class Solution {
    /**
     * @param TreeNode $root
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        if ($root == null) return null;
        if ($root->val === $val) return $root;
        
        if ($val < $root->val) return $this->searchBST($root->left, $val);
        return $this->searchBST($root->right, $val);
    }
}
