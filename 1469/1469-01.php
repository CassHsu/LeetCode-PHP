<?php
class Solution {
    var $ans = array();
    function getLonelyNodes($root) {
        $this->dfs($root);
        return $this->ans;
    }
    
    function dfs($node) {
        if ($node == null) return;

        if((empty($node->left->val) && !empty($node->right->val))) {
            $this->ans[] = $node->right->val;
        }
        if(empty($node->right->val) && !empty($node->left->val)) {
            $this->ans[] = $node->left->val;
        } 
        
        $this->dfs($node->left);
        $this->dfs($node->right);
    }
}
