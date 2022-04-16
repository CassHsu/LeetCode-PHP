<?php
class Solution {
    private $low = null;
    private $high = null;
    
    function trimBST($root, $low, $high) {
        $this->low = $low;
        $this->high =$high;
        return $this->trim($root);
    }
    
    function trim($node) {
        if ($node == null) return null;
        else if ($node->val > $this->high) {
            return $this->trim($node->left);
        } else if ($node->val < $this->low) {
            return $this->trim($node->right);
        } else {
            $node->left = $this->trim($node->left);
            $node->right = $this->trim($node->right);
            return $node;
        }
    }
}
