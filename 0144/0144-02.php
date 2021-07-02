<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root) {
        $ans = array();
        $stack = array();
        
        if ($root) array_push($stack, $root);
        
        while (count($stack) > 0) {
            $node = array_pop($stack);
            array_push($ans, $node->val);
            
            if ($node->right !== null)
                array_push($stack, $node->right);
            
            if ($node->left !== null)
                array_push($stack, $node->left);
        }
        
        return $ans;
    }
}
