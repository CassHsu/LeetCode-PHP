<?php
class Solution {
    function kthSmallest($root, $k) {
        $leftSize = self::getSize($root->left);
        if ($k <= $leftSize) return self::kthSmallest($root->left, $k);
        if ($k === $leftSize + 1) return $root->val;
        return self::kthSmallest($root->right, $k - ($leftSize + 1));
    }
    
    function getSize($root) {
        if (is_null($root)) return 0;
        return self::getSize($root->left) + 1 + self::getSize($root->right);
    }
}