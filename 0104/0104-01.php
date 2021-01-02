<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        return $this->dfs($root, 0);
    }
    
    function dfs($root, $count) {
        if ($root == null) return $count;
        
        $count++;
        $l = $this->dfs($root->left, $count);
        $r = $this->dfs($root->right, $count);
        
        return max($l, $r);
    }
}