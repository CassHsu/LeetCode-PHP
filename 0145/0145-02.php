<?php
class Solution {
    function postorderTraversal($root) {
        $ans = array();
        $stack = array();
        
        if ($root) array_push($stack, $root);
        
        while (count($stack) > 0) {
            $node = array_pop($stack);
            
            if ($node->left !== null)
                array_push($stack, $node->left);
            
            if ($node->right !== null)
                array_push($stack, $node->right);
            
            array_push($ans, $node->val);
        }
        
        return array_reverse($ans);
    }
}
