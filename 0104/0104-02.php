<?php
class Solution {
    function maxDepth($root) {
        if ($root == null) return 0;
        
        return 1 + max(self::maxDepth($root->left), self::maxDepth($root->right));
    }
}