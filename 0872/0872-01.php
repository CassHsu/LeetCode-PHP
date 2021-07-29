<?php 
class Solution {

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2) {
        return $this->dfs($root1) === $this->dfs($root2);
    }
    
    function dfs($node) {
        if (is_null($node->left) && is_null($node->right)) return $node->val;
        
        $ret = array();
        if (!is_null($node->left)) {
            $v = $this->dfs($node->left);
            array_push($ret, $v);
        }
        
        if (!is_null($node->right)) {
            $v = $this->dfs($node->right);
            array_push($ret, $v);
        }
        
        return implode("-", $ret);
    }
}
