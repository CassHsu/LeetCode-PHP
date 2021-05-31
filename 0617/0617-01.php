<?php
class Solution {
    function mergeTrees($root1, $root2) {
        if ($root1 == null) return $root2;
        if ($root2 == null) return $root1;
        
        $root1->val += $root2->val;
        $root1->left = $this->mergeTrees($root1->left, $root2->left);
        $root1->right = $this->mergeTrees($root1->right, $root2->right);
        return $root1;
    }
}
