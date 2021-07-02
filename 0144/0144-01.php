<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    private $ans;
    
    function preorderTraversal($root) {
        $this->ans = array();
        $this->preorder($root);
        return $this->ans;
    }
    
    function preorder($node) {
        if ($node == null) return;
        
        array_push($this->ans, $node->val);
        $this->preorder($node->left);
        $this->preorder($node->right);
    }
}
