<?php
class Solution {
    private $ret;
    
    function postorderTraversal($root) {
        $this->ret = array();
        $this->postprder($root);
        return $this->ret;
    }
    
    function postprder($node) {
        if ($node == null) return;
        
        $this->postprder($node->left);
        $this->postprder($node->right);
        array_push($this->ret, $node->val);
    }
}
